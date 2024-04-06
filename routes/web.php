<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Pass data and Display in Blade view


Route::get('/', [HomeController::class, 'ShowHome']);
