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
use App\Http\Controllers\PanaderiaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

// Rutas públicas
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

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

    Route::get('/panaderia', [PanaderiaController::class, 'index'])->name('panaderia.index');

    Route::prefix('otros')->group(function () {
        Route::get('/', [OtrosController::class, 'index'])->name('otros.index');
        Route::get('/{categoria}', [OtrosController::class, 'categoria'])->name('otros.categoria');
    });

    Route::get('/carrito', [CartController::class, 'index'])->name('carrito.index');
    Route::post('/carrito/add', [CartController::class, 'add'])->name('carrito.add');
    Route::post('/carrito/remove', [CartController::class, 'remove'])->name('carrito.remove');
    Route::post('/carrito/clear', [CartController::class, 'clear'])->name('carrito.clear');
    Route::post('/carrito/checkout', [CartController::class, 'checkout'])->name('carrito.checkout');

    Route::get('/reports/mejor_vendidos.blade', [ReportController::class, 'topSellingProducts'])->name('reports.topSellingProducts');
    Route::get('/reports/ingresos_categoria.blade', [ReportController::class, 'totalIncomeByCategory'])->name('reports.totalIncomeByCategory');
    Route::get('/reports/nuevos_usuarios', [ReportController::class, 'newUsersLastMonth'])->name('reports.newUsersLastMonth');
    
    Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('/profiles/{user}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::put('/profiles/{user}', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profiles/{user}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
});
