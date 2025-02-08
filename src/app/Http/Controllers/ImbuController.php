<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImbuController extends Controller
{
    public function index()
    {
        return view('imbu'); // Retorna a view "minha-view.blade.php"
    }
}
