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
            'email' => ['required'],
            'password' => ['required'],
        ]);

        \Log::info('Auth params', ['params' => $credentials]);

        $check = Auth::attempt($credentials);

        \Log::info('Auth attempt result', ['result' => $check]);

        $project = DB::table('projects')->select('*')->get();

        if ($check) {
            \Log::info('Login successful');
            return view('CMS/projects/projects', compact('project'));
        } else {
            \Log::error('Login failed');
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('/CMS/login');
    }
}
