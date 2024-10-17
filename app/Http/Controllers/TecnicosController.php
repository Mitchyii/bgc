<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TecnicoLoginController extends Controller
{
    // Mostrar o formulário de login
    public function showLoginForm()
    {
        return view('auth.tecnico-login');  // Altere para a view que você quer para login
    }

    // Processar o login
    public function login(Request $request)
    {
        // Validação das credenciais
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tentando fazer login com o guard 'tecnico'
        if (Auth::guard('tecnico')->attempt($credentials)) {
            // Redireciona para o dashboard ou página desejada após o login
            return redirect()->intended('/dashboard');
        }

        // Se o login falhar, retorna com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas são inválidas.',
        ]);
    }

    // Método para deslogar
    public function logout()
    {
        Auth::guard('tecnico')->logout();
        return redirect('/');
    }
}
