<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MizeraveisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota do recurso "Doar" (cria todas as rotas RESTful)
Route::resource('doar', MizeraveisController::class);

// Corrigir a rota para os detalhes do "Mizerável"
Route::get('/mizeraveis/{id}', [MizeraveisController::class, 'details'])->name('site.pessoa');
