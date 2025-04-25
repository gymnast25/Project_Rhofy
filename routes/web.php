<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/', [ProductController::class, 'index'])->name('home');;
// Route untuk menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('products.index');
// Route untuk menampilkan detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);