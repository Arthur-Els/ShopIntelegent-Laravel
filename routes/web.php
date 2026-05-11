<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/description', function () {
    return view('description');
});

Route::get('/cart', function () {
    return view('cart');
});

// Route::get('/product', [ProductController::class, 'index']);
// Route::post('/product/store', [ProductController::class, 'store']);

Route::resource('/product', ProductController::class);
