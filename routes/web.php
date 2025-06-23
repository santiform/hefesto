<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InformeController;

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rutas para usuarios ADMIN
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [InformeController::class, 'adminIndex'])->name('index');
        // Otras rutas exclusivas de admin acá
    });

// Rutas para usuarios OPERADOR
Route::middleware(['auth', 'role:operador'])
    ->prefix('operador')
    ->name('operador.')
    ->group(function () {
        Route::get('/', [InformeController::class, 'operadorIndex'])->name('index');
        Route::get('/nuevo-informe', [InformeController::class, 'nuevoInforme'])->name('nuevo.informe');
        Route::get('/mis-informes', [InformeController::class, 'misInformes'])->name('informes.mios');
    });