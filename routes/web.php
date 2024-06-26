<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LacteosController;
use App\Http\Controllers\CecinasController;
use App\Http\Controllers\BebidasController;
use App\Http\Controllers\GalletasController;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/lacteos', [LacteosController::class, 'index'])->name('lacteos.index');
    Route::get('/lacteos/{categoria}', [LacteosController::class, 'categoria'])->name('lacteos.categoria');

    Route::prefix('cecinas')->group(function () {
        Route::get('/', [CecinasController::class, 'index'])->name('cecinas.index');
    });

    Route::prefix('bebidas')->group(function () {
        Route::get('/', [BebidasController::class, 'index'])->name('bebidas.index');
    });

    Route::prefix('galletas')->group(function () {
        Route::get('/', [GalletasController::class, 'index'])->name('galletas.index');
    });

    Route::prefix('otros')->group(function () {
        Route::get('/', [OtrosController::class, 'index'])->name('otros.index');
        Route::get('/{categoria}', [OtrosController::class, 'categoria'])->name('otros.categoria');
    });

    Route::get('/carrito', [CartController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/carrito/remove', [CartController::class, 'remove'])->name('cart.remove');
});
