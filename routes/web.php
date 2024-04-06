<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

//Basic Routing with Multiple Paramiter with Hyper link


Route::get('/name/{FirstName}/{MiddleName}/{LastName}', [DemoController::class, 'MyName']);
