<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->get('/panel', function () {
    return view('panel');//----esta ruta se creo para mostrar la vista panel.blade.php al ingresar a la ruta /panel, esta ruta solo es accesible para usuarios autenticados gracias al middleware auth, que se encarga de verificar si el usuario esta autenticado antes de permitirle acceder a la ruta /panel--
});

require __DIR__.'/auth.php';
