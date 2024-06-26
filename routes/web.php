<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LacteosController;
use App\Http\Controllers\CecinasController;
use App\Http\Controllers\BebidasController;
use App\Http\Controllers\GalletasController;
use App\Http\Controllers\OtrosController;
use App\Http\Controllers\PanaderiaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/reports/mejor_vendidos', [ReportController::class, 'topSellingProducts'])->name('reports.topSellingProducts');
    Route::get('/reports/ingresos_categoria', [ReportController::class, 'totalIncomeByCategory'])->name('reports.totalIncomeByCategory');
    Route::get('/reports/nuevos_usuarios', [ReportController::class, 'newUsersLastMonth'])->name('reports.newUsersLastMonth');

    Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::delete('/profiles/{user}', [ProfileController::class, 'destroy'])->name('profiles.destroy');

    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::prefix('lacteos')->group(function () {
        Route::get('/', [LacteosController::class, 'index'])->name('lacteos.index');
        Route::get('/{categoria}', [LacteosController::class, 'categoria'])->name('lacteos.categoria');
    });

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

    Route::prefix('panaderia')->group(function () {
        Route::get('/', [PanaderiaController::class, 'index'])->name('panaderia.index');
    });

    Route::get('/carrito', [CartController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/carrito/remove', [CartController::class, 'remove'])->name('cart.remove');
});
