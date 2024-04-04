<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/orders', [Controllers\OrdersController::class, 'index']);
Route::get('/product', [Controllers\ProductsController::class, 'index']);
Route::get('/analytics', [Controllers\AnalyticsController::class, 'index']);
Route::get('/users', [Controllers\UserController::class, 'index']);

// Route::get('/', fn()=> view('home'));
// Route::get('/orders', fn()=> view('orders'));
// Route::get('/product', fn()=> view('product'));
// Route::get('/analytics', fn()=> view('analytics'));