<?php

namespace App\Http\Controllers\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\projects;
class AuthController extends Controller
{
    public function admin()
    {
        return view('CMS/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'], // Thêm kiểm tra định dạng email
            'password' => ['required'],
        ]);

        \Log::info('Auth params', ['params' => $credentials]);

        // Kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Nếu thành công, thì regenerate session (bắt buộc để bảo mật)
            $request->session()->regenerate();

            // Lấy danh sách dự án
            $project = DB::table('projects')->get();

            // Điều hướng đến trang dự án
            return redirect()->intended('CMS/projects')->with('projects', $project);
        }

        // Nếu thông tin không đúng, trả về trang login cùng với lỗi
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email'); // Chỉ lưu lại trường email khi trả về
    }


    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        \Log::info('store success', ['data' => $user]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Đăng xuất người dùng

        // Hủy bỏ phiên và tạo lại mã token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Điều hướng về trang đăng nhập (hoặc trang chính)
        return redirect('/CMS/admin'); // Sử dụng redirect thay vì view
    }

}
