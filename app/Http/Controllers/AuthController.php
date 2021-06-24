<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);

        $data = $request->only('email','password');

        $isLogin = Auth::attempt($data);

        if ($isLogin) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back();
        }
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $password = Hash::make($request->password);

        $request->merge([
            'password' => $password,
            'image' => 'kosong'
        ]);

        User::create($request->all());

        return  redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
