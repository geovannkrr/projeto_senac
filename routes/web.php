<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    CadastroController,
    EditController,
    ExibirController,
    ExcluirController

    };

Route::get('/', function () {
    return view('welcome');
});
