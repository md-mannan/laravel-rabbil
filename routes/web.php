<?php

use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;

// Single Action Controller __invoke()
Route::get('/', SingleActionController::class);
