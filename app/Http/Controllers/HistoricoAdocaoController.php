<?php

namespace App\Http\Controllers;

use App\Models\historico_adocao;

use Illuminate\Http\Request;

class HistoricoAdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historico_adocao = Historico_Adocao::orderBy('id_historico_adocao')->paginate(15);
        return view('cadastro.indexCadastro')->with(compact('historico_adocao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historico_adocao_create = null;
        return view('historico_adocao.index')
            ->with(compact('historico_adocao'));
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
    public function show(Request $request, int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, int $id)
    {
        //
    }
}
