<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cecinas', [PageController::class, 'cecinas'])->name('cecinas');
Route::get('/bebidas', [PageController::class, 'bebidas'])->name('bebidas');
Route::get('/galletas', [PageController::class, 'galletas'])->name('galletas');
Route::get('/otros', [PageController::class, 'otros'])->name('otros');


Route::get('/carrito', [CartController::class, 'index'])->name('carrito');
Route::post('/carrito/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/carrito/remove', [CartController::class, 'remove'])->name('cart.remove');

// Autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
