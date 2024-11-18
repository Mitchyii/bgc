<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Certifica-se de que o usuário esteja autenticado
    }

    public function view(){
        return view('admin.cliente');
    }
}
