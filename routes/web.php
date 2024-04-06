<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

//Paramiter with Hyper link


Route::get('/name/{x}', [DemoController::class, 'MyName']);
