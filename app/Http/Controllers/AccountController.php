<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function Profile()
    {
        return view('Profile');
    }
    function UpdateProfile()
    {
        return view('UpdateProfile');
    }
    function Signup()
    {
        return view('Signup');
    }
    function Login()
    {
        return view('Login');
    }
    function Logout()
    {
        return view('Logout');
    }
}
