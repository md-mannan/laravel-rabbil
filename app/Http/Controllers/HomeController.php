<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Blade view controller


    function ShowHome()
    {
        return view('Home');
    }
}
