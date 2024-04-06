<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //For if and ifelse else in Blade view


    function ShowHome()
    {

        $Country = array('Bangladesh', 'India', 'Pakistan', 'Srilanka', 'Nepal', 'Bhutan');
        $LoginStatus = true;

        return view('Home', ['CountryKey' => $Country, 'LoginStatusKey' => $LoginStatus]);
    }
}
