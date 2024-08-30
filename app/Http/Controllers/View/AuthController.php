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
        $project = DB::table('projects')->select('*');
        $project = $project->get();
        if ($check) {
            return view('CMS/projects/projects',compact('project'));
        } else {
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    
    }

    public function register(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');    
        $user->password = Hash::make($request->input('password'));
        $user->save();
        \Log::info('store success', ['data' => $user]);
    }
    
}
