<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TecnicoLoginController;
use App\Http\Controllers\CalendarioController;


Route::middleware(['guest'])->group(function () {
    Route::get('/', [TecnicoLoginController::class, 'showLoginForm'])->name('tecnico.login');
    Route::post('/', [TecnicoLoginController::class, 'login'])->name('tecnico.login.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [TecnicoLoginController::class, 'logout'])->name('tecnico.logout');
    Route::get('/calendario', [CalendarioController::class, 'showCalendario'])->name('calendario');
});
