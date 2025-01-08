<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');// Rute untuk Brand
Route::resource('brands', BrandController::class);

// Rute untuk Category
Route::resource('categories', CategoryController::class);

// Rute untuk Size
Route::resource('sizes', SizeController::class);

// Rute untuk Color
Route::resource('colors', ColorController::class);

// Rute untuk Transaction
Route::resource('transactions', TransactionController::class);
