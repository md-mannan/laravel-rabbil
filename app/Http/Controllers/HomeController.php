<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //For Each Loop in Blade view


    function ShowHome()
    {
        $City = array(/*'Dhaka', 'Comilla', 'Noakhali', 'Chandpur', 'Laksmipur', 'Sylhet'*/);
        $Country = array('Bangladesh', 'India', 'Pakistan', 'Srilanka', 'Nepal', 'Bhutan');

        return view('Home', ['CityKey' => $City, 'CountryKey' => $Country]);
    }
}
