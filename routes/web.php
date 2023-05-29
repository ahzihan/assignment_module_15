<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;



Route::resource('user', UserController::class);
Route::get('/home', [HomeController::class,'Index']);

Route::middleware(['checkAuthUser'])->group(function(){

    Route::get('/profile/{key}', [DemoController::class, 'Profile']);
    Route::get('/setting/{key}', [DemoController::class, 'Setting']);

});

Route::resource('Product', ProductController::class);

Route::get('contact/{email}', ContactController::class);

Route::resource('Post', PostController::class);

Route::get('/', function () {
    return view('welcome');
});




