<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImbuController; // Adicione esta linha!

Route::get('/', function () {
    return view('home');
});


