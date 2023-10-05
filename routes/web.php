<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AdocaoController,
    AnimalController,
    ClienteController,
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

    // ROUTE TELA CADASTRO
        Route::get('/', function () {
            return redirect()->route('indexCadastro');
        })->middleware(['auth', 'verified'])
            ->name('cadastro');

        Route::get('/indexCadastro', function () {
            return redirect()->route('indexCadastro');
            })->middleware(['auth', 'verified'])
            ->name('cadastro');
    // ROUTE TELA CADASTRO

    // ROUTE CADASTRAR PET
        Route::prefix('animal')
        ->controller(AnimalController::class)
        ->middleware('auth')
        ->group(function(){

            Route::get('/novo', 'cadastro-pet')->name('cadastroPet');
            Route::get('/editar/{id}', 'editar-pet')->name('editarPet');
            Route::get('exibir/{id}','exibir-pet')->name('visualizarPet');

            Route::post('cadastrar','store')->name('animal.store');
            Route::post('atualizar/{id}','update')->name('animal.update');
            Route::post('excluir/{id}','destroy')->name('animal.destroy');
        });
    // ROUTE CADASTRAR PET

    // ROUTE CADASTRAR PESSOA
      Route::prefix('cliente')
      ->controller(ClienteController::class)
      ->middleware('auth')
      ->group(function(){

          Route::get('/novo', 'cadastro-pessoa')->name('cadastroPessoa');
          Route::get('/editar/{id}', 'editar-pet')->name('editarPessoa');
          Route::get('exibir/{id}','exibir-pet')->name('visualizarPessoa');

          Route::post('cadastrar','store')->name('cliente.store');
          Route::post('atualizar/{id}','update')->name('cliente.update');
          Route::post('excluir/{id}','destroy')->name('cliente.destroy');
      });
    // ROUTE CADASTRAR PESSOA

    // ROUTE ADOÇÃO

    // ROUTE ADOÇÃO


