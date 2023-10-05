<?php

namespace App\Http\Controllers;

use App\Models\historico_animal;
use Illuminate\Http\Request;

class HistoricoAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historicoanimal = historico_animal::orderBy('id_historico_animal')->paginate(10);
       return view('cadastro.indexCadastro')->with(compact('historico_animal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historicoanimalCreate = null;
        return view('cadastro.cadastroPet')->with(compact('historico_animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        historico_animal::create($request->all());
        return redirect()
            ->route('cadastro.cadastroPet')
            ->with('novo', 'Pet cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historicoanimal = historico_animal::with([

            ])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historicoanimal = historico_animal::find($id);
        return view('editar.editarPet')
            ->with(compact('historico_animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historicoanimal = historico_animal::find($id);
        $historicoanimal->update($request->all());
        return redirect()
            ->route('cadastro.indexCadastro')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        historico_animal::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
