<?php

namespace App\Http\Controllers;

use App\Models\Mizeraveis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MizeraveisController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtém o parâmetro de busca
        $search = request('search');

        // Consulta com ou sem busca, mantendo paginação
        if ($search) {
            $mizeraveis = Mizeraveis::where('nome', 'like', '%' . $search . '%')->paginate(5);
        } else {
            $mizeraveis = Mizeraveis::paginate(5);
        }

        // Retorna a view com os resultados e o termo de busca
        return view('site.home', [
            'mizeraveis' => $mizeraveis,
            'search' => $search,
        ]);
    }

    /**
     * Exibe os detalhes de um registro específico.
     */
    public function details($id)
    {
        // Busca o registro pelo ID
        $mizeravel = Mizeraveis::findOrFail($id);

        // Retorna a view com os detalhes do registro
        return view('site.pessoa', compact('mizeravel'));
    }

    

    // Outros métodos (create, store, etc.) podem ser implementados conforme necessário

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mizeraveis $mizeraveis)
    {
        //
    }
}
