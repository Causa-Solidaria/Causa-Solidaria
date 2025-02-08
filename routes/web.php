<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImbuController; // Adicione esta linha!

Route::get('/', function () {
    return view('welcome');
});

Route::get('/maconha', function(){
    return view('welcome');
});

Route::get('/imbu', [ImbuController::class, 'index']);