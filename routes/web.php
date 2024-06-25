<?php

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
    Route::get('/', [LacteosController::class, 'index'])->name('home');

    Route::prefix('lacteos')->group(function () {
        Route::get('/', [LacteosController::class, 'index'])->name('lacteos');
        Route::get('/{categoria}', [LacteosController::class, 'categoria'])->name('lacteos.categoria');
    });

    Route::prefix('cecinas')->group(function () {
        Route::get('/', [CecinasController::class, 'index'])->name('cecinas');
        Route::get('/{categoria}', [CecinasController::class, 'categoria'])->name('cecinas.categoria');
    });

    Route::prefix('bebidas')->group(function () {
        Route::get('/', [BebidasController::class, 'index'])->name('bebidas');
        Route::get('/{categoria}', [BebidasController::class, 'categoria'])->name('bebidas.categoria');
    });

    Route::prefix('galletas')->group(function () {
        Route::get('/', [GalletasController::class, 'index'])->name('galletas');
    });

    Route::prefix('otros')->group(function () {
        Route::get('/', [OtrosController::class, 'index'])->name('otros');
        Route::get('/{categoria}', [OtrosController::class, 'categoria'])->name('otros.categoria');
    });

    Route::get('/carrito', [CartController::class, 'index'])->name('carrito');
    Route::post('/carrito/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/carrito/remove', [CartController::class, 'remove'])->name('cart.remove');
});
