<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Certifica-se de que o usuário esteja autenticado
    }
    
    public function showCalendario()
    {
        return view('admin.calendar');
    }
}
