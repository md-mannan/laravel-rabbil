<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Basic Routing with Multiple Paramiter with Controller & View
    function MyName($fname, $mname, $lname)
    {
        return view('Home', ['firstname' => $fname, 'middlename' => $mname, 'lastname' => $lname]);
    }
}
