<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Usuario;

class usuario extends Controller
{
    public function index() {
        return view('user.user_login');
    }
}
