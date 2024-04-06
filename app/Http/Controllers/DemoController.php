<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //Paramiter with Hyper link
    function MyName($name)
    {
        return 'My Name is ' . $name;
    }
}
