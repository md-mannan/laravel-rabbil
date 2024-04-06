<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Blade view


Route::get('/', [HomeController::class, 'ShowHome']);
