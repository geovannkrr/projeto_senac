<?php

namespace App\Http\Controllers;

use App\Models\{
    Cliente,
    Animal,
    Adocao,

};
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::orderBy('id_cliente') ->paginate(15);
        return view('cadastro.indexCadastro') ->with(compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clienteCreate = null;
        return view('cadastro.cadastroPessoa')
            ->with(compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()
            ->route('cadastro.cadastroPessoa')
            ->with('novo', 'Cliente cadastro com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $cliente = Cliente::with([
            'adocao',
            'adocao.animal',
          ])->find($id);

        return view('visualizar.visualizarPessoa')
            ->with(compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $cliente = Cliente::find($id);
        return view('editar.editarPessoa')
            ->with(compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return redirect()
            ->route('cliente.update')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Cliente::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
