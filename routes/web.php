<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/tweets', [TweetsController::class, 'index'] -> name('tweets.index')  );
