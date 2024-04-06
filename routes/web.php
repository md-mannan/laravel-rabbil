<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

// // Resource Controller GET only

Route::resource('/photos', PhotoController::class);
