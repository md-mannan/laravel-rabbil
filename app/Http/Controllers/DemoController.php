<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Basic Routing with Multiple Paramiter with Hyper link
    function MyName($fname, $mname, $lname)
    {
        return 'My Name is ' . $fname . ' ' . $mname . ' ' . $lname;
    }
}
