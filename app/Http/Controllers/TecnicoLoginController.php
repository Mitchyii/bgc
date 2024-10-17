<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TecnicoLoginController extends Controller
{
    /**
     * Exibe o formulário de login para os técnicos.
     */
    public function showLoginForm()
    {
        return view('auth.tecnico-login'); // Página de login dos técnicos
    }

    /**
     * Realiza o login do técnico.
     */
    public function login(Request $request)
    {
        // Validação dos dados de login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Verificar se as credenciais são válidas com o guard 'tecnico'
        if (Auth::guard('tecnico')->attempt($credentials)) {
            // Redireciona para o dashboard após o login bem-sucedido
            return view('admin.calendar');
        } else {
            // Caso as credenciais sejam inválidas, retorna um erro
            return back()->withErrors([
                'email' => 'Credenciais inválidas.',
            ]);
        }
    }

    /**
     * Realiza o logout do técnico.
     */
    public function logout()
    {
        Auth::guard('tecnico')->logout(); // Faz o logout do técnico
        return redirect('/'); // Redireciona para a página inicial
    }
}
