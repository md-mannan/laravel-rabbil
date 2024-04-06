<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Pass data and Display in Blade view


    function ShowHome()
    {
        $NewHeading = '<h1 class="card-title">Bangladesh Won by 100 runs with Newziland</h1>';
        $alert = '<script class="card-title">alert("You are Hacked");</script>';

        return view('Home', ['headlineKey' => $NewHeading, 'alertKey' => $alert]);
    }
}
