<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register :: Clinic Management System';
        return view('user/register', $data);
    }

    public function login()
    {
        $data['title'] = 'Login :: Clinic Management System';
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
            'password' => $request->password
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration success. Please Login!');
    }
}