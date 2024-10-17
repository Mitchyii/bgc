<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Redirect an Autenticated Tecnico to Calendario
        RedirectIfAuthenticated::redirectUsing(function(){
            return route('calendario');
        });

        //Redirect no autenticated User to Login
        Authenticate::redirectUsing(function(){
            Session::flash('fail', 'Esta página é apenas para Tecnicos. Se és um(a) tecnico(a) faz login');
            return route('tecnico.login');
        });
    }
}
