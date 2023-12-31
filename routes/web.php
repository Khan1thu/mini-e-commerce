<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);

Auth::routes();

Route::resource('/products', 'App\Http\Controllers\ProductController');

Route::resource('/users', 'App\Http\Controllers\UserController');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products/create', [ProductController::class, 'create'])->middleware('auth');

Route::get('/users/{id}/products', [UserController::class, 'ownProduct']);