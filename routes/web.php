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

    // ROUTE TELA INICIAL
        Route::get('/', function () {
            return redirect()->route('TelaInicial');
        })->middleware(['auth', 'verified'])
            ->name('home');

        Route::get('/TelaInicial', function () {
            return redirect()->route('TelaInicial');
            })->middleware(['auth', 'verified'])
              ->name('home');
    // ROUTE TELA INICIAL

    // ROUTE CADASTRO PET
        Route::prefix('cadastro')
        ->controller(CadastroController::class)
        ->middleware('auth')
        ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexCadastro');
                Route::get('/novoPet', 'create')->name('cadastroPet');
            // GET

            // POST
                Route::post('cadastrar', 'store')
                ->name('cadastro.store');
            // POST

        });
    // ROUTE CADASTRO PET
 