<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{

    public function showLoginForm()
    {
        return view('mobile.login');
    }

    public function showRegisterForm()
    {
        return view('mobile.register');
    }

    public function home()
    {
        return view('mobile.home');
    }

    public function profile()
    {
        return view('mobile.profile');
    }

    public function settings()
    {
        return view('mobile.settings');
    }
}
