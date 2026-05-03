<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name ('home'); 
//---en este archivo php nombre el controlador y el metodo que se va a ejecutar al ingresar a la ruta---
