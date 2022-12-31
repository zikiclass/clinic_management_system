<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:tb_user',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = new User([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration success. Please Login!');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }
        return back()->withErrors('password', 'Wrong username or password!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('user/dashboard', $data);
    }
}