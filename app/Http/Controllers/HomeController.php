<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index()
 {
        return view('home');  
 }   //----este archivo lo cree al ejecutar el comando php artisan make:controller HomeController /--
} //---en este archivo php se define el controlador HomeController y el metodo index que retorna la vista home, que es la que se va a mostrar al ingresar a la ruta /--
