<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

// Routing Group

Route::group(['prefix' => 'account'], function () {

    Route::get('profile', [AccountController::class, 'Profile']);
    Route::get('update', [AccountController::class, 'UpdateProfile']);
    Route::get('signup', [AccountController::class, 'Signup']);
    Route::get('login', [AccountController::class, 'Login']);
    Route::get('logout', [AccountController::class, 'Logout']);
});
