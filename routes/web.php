<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

//Basic Routing with Multiple Paramiter with Controller & View


Route::get('/name/{FirstName}/{MiddleName}/{LastName}', [DemoController::class, 'MyName']);
