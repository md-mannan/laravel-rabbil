<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //For Each Loop in Blade view


    function ShowHome()
    {
        $data = array('Dhaka', 'Comilla', 'Noakhali', 'Chandpur', 'Laksmipur', 'Sylhet');

        return view('Home', ['dataKey' => $data]);
    }
}
