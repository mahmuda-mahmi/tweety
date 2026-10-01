<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TweetController::class, 'index']);

// Route::get('/tweets', [TweetsController::class, 'index'] -> name('tweets.index')  );
