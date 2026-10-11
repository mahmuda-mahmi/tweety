<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TweetController::class, 'index']);

Route::middleware('auth')->group(function() {
    Route::post('/tweets', [TweetController::class, 'store']);
    Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit']);
    Route::put('/tweets/{tweet}', [TweetController::class, 'update']);
    Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy']);

    //logout route
    Route::post('/logout', Logout::class);
});


Route::middleware('guest')->group(function() {
    Route::view('/login', 'auth.login')->name('login');
    
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', Register::class);
});
