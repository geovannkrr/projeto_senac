<?php

namespace App\Http\Controllers;

use App\Models\{
    Animal,
    cliente,
    Adocao,
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
        $naimalCreate = null;
        return view('cadastro.cadastroPet')->with(compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
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
