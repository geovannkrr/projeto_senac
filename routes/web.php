<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    CadastroController,
    AnimalController,
    ClienteController

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

    // ROUTE CADASTRO
        Route::prefix('cadastro')
        ->controller(CadastroController::class)
        ->middleware('auth')
        ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexCadastro');
                Route::get('/novoPet', 'create')->name('cadastroPet');
                Route::get('/novoPessoa', 'create')->name('cadastroPessoa');
            // GET

            // POST
                Route::post('cadastrar', 'store')
                ->name('cadastro.store');
            // POST

        });
        // ROUTE CADASTRO

        // ROUTE EDIT
        Route::prefix('edit')
        ->controller(EditController::class)
        ->middleware('auth')
        ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexEditar');
                Route::get('/editarPet', 'edit')->name('editarPet');
                Route::get('/editarPessoa', 'edit')->name('editarPessoa');
            // GET

            // POST
               Route::post('atualizar/{id}', 'update')
               ->name('edit.update');
            // POST
        });
        // ROUTE EDIT

        // ROUTE EXIBIR
        Route::prefix('exibir')
        ->controller(ExibirController::class)
        ->middleware('auth')
        ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexVisualizar');
                Route::get('/exibirPet', 'create')->name('visualizarPet');
                Route::get('/exibirPessoa', 'create')->name('visualizarPessoa');
            // GET

            // POST
            Route::post('exibir', 'store')
                 ->name('exibir.store');
            // POST
        });
        // ROUTE EXIBIR

        // ROUTE EXCLUIR
        Route::prefix('excluir')
        ->controller(ExcluirController::class)
        ->middleware('auth')
        ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexExcluir');
                Route::get('/excluirPet', 'destroy')->name('excluirPet');
                Route::get('/excluirPessoa', 'destroy')->name('excluirPessoa');
            // GET

            // POST
            Route::post('excluir/{id}', 'destroy')
            ->name('excluir.destroy');
            // POST
        });
           // ROUTE EXCLUIR
















