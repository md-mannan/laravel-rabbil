<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Routing with Controller & View


Route::get('/', [SiteController::class, 'Home']);
Route::get('/about', [SiteController::class, 'About']);
Route::get('/contact', [SiteController::class, 'Contact']);
