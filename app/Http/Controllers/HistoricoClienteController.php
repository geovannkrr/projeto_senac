<?php

namespace App\Http\Controllers;

use App\Models\historico_cliente;
use Illuminate\Http\Request;

class HistoricoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historicocliente = historico_cliente::orderBy('id_historico_cliente')->paginate(10);
       return view('cadastro.indexCadastro')->with(compact('historico_cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historicoclienteCreate = null;
        return view('cadastro.cadastroPessoa')->with(compact('historico_cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        historico_cliente::create($request->all());
        return redirect()
            ->route('cadastro.cadastroPessoa')
            ->with('novo', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historicocliente = historico_cliente::with([

            ])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historicocliente = historico_cliente::find($id);
        return view('editar.editarPessoa')
            ->with(compact('historico_cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historicocliente = historico_cliente::find($id);
        $historicocliente->update($request->all());
        return redirect()
            ->route('cadastro.indexCadastro')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        historico_cliente::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
