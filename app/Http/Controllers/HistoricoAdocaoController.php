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
        $historicoadocao = historico_adocao::orderBy('id_historico_adocao')->paginate(10);
       return view('cadastro.indexCadastro')->with(compact('historico_adocao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $historicoadocaoCreate = null;
        return view('adocao.indexAdocao')->with(compact('historico_adocao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        historico_adocao::create($request->all());
        return redirect()
            ->route('adocao.indexAdocao')
            ->with('novo', 'Adoção cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $historicoadocao = historico_adocao::with([

            ])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $historicoadocao = historico_adocao::find($id);
        return view('adocao.indexAdocao')
            ->with(compact('historico_adocao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $historicoadocao = historico_adocao::find($id);
        $historicoadocao->update($request->all());
        return redirect()
            ->route('adocao.indexAdocao')
            ->with('atualizado', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        historico_adocao::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido', 'Excluído com sucesso!');
    }
}
