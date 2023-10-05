<?php

namespace App\Http\Controllers;

use App\Models\{
    Adocao,
    Animal,
    Cliente,
};
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adocao = Adocao::orderBy('id_adocao')->paginate(15);
       return view('cadastro.indexCadastro')->with(compact('adocao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adocaoCreate = null;
        return view('adocao.indexAdocao')
            ->with(compact('adocao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()
            ->route('adocao.indexAdocao')
            ->with('novo', 'Adoção cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adocao = Adocao::with([
            'cliente',
            'cliente.animal',
          ])->find($id);

        return view('adocao.indexAdocao')
            ->with(compact('adocao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $adocao = Adocao::find($id);
        return view('adocao.indexAdocao')
            ->with(compact('adocao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $adocao = Adocao::find($id);
        $adocao->update($request->all());
        return redirect()
            ->route('adocao.indexAdocao')
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
