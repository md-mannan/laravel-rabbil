<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{

    // Single Action Controller __invoke()
    function __invoke()
    {
        return view('Home');
    }
}
