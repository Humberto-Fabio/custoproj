<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\Usuario;

class Usuario_Controller extends Controller
{
    public function index() {
        return view('usuarios.index');
    }
}
