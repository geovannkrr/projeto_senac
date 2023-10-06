<?php

namespace App\Http\Controllers;

use App\Models\{
    Animal,
    cliente,
    Adocao,
    historico_animal,
};

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animal = Animal::orderBy('id_animal')->paginate(15);
       return view('cadastro.indexCadastro')->with(compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animalCreate = null;
        return view('cadastro.cadastroPet')->with(compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect()
            ->route('cadastro.cadastroPet')
            ->with('novo', 'Pet cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $animal = Animal::with([
            'adocao',
            'adocao.animal',
            'historico_animal',
            'historico_animal.animal'

          ])->find($id);

        return view('visualizar.visualizarPet')
            ->with(compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
