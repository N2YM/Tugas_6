<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }
    function loginprocess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('beranda')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal, Silahkan Cek Kembali Email dan Password Anda');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('beranda');
    }

    function registrattion()
    {
    }

    function forgotPassword()
    {
    }
}
