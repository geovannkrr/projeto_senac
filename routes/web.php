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

            // GET
                Route::get('/', 'index')->name('indexCadastro');
                Route::get('/novoPet', 'create')->name('cadastroPet');
            // GET

            // POST
                Route::post('cadastrar', 'store')
                ->name('cadastro.store');
            // POST

            //ROUTE EDIT-PET
            Route::prefix('edit-Pet')
            ->controller(EditController::class)
            ->middleware('auth')
            ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexEditar');
                Route::get('/editPet', 'edit')->name('editarPet');
            // GET

            // POST
            Route::post('atualizar/{id}', 'update')
            ->name('edit.update');
            // POST

        });
            //ROUTE EDIT-PET

            //ROUTE EXIBIR-PET
            Route::prefix('exibir-Pet')
            ->controller(ExibirController::class)
            ->middleware('auth')
            ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexVisualizar');
                Route::get('/exibirPet', 'edit')->name('visualizarPet');
            // GET

            // POST
               Route::post('exibir', 'store')
               ->name('exibir.store');
            // POST

        });
            //ROUTE EXIBIR-PET

            //ROUTE EXCLUIR-PET
            Route::prefix('excluir-Pet')
            ->controller(ExcluirController::class)
            ->middleware('auth')
            ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexExcluir');
                Route::get('/excluirPet', 'edit')->name('excluirPet');
            // GET

            // POST
               Route::post('excluir/{id}', 'destroy')
               ->name('excluir.destroy');
            // POST

        });
            //ROUTE EXCLUIR-PET

            // ROUTE CADASTRO-PESSOA
        Route::prefix('cadastro-pessoa')
        ->controller(CadastroController::class)
        ->middleware('auth')
        ->group(function(){

            Route::get('/novo', 'cadastro-pet')->name('cadastroPet');
            Route::get('/editar/{id}', 'editar-pet')->name('editarPet');
            Route::get('exibir/{id}','exibir-pet')->name('visualizarPet');

            // POST
                Route::post('cadastrar', 'store')
                ->name('cadastro.store');
            // POST
        });
            //ROUTE CADASTRO PESSOA

            //ROUTE EDIT-PESSOA
            Route::prefix('edit-Pessoa')
            ->controller(EditController::class)
            ->middleware('auth')
            ->group(function () {

          Route::get('/novo', 'cadastro-pessoa')->name('cadastroPessoa');
          Route::get('/editar/{id}', 'editar-pet')->name('editarPessoa');
          Route::get('exibir/{id}','exibir-pet')->name('visualizarPessoa');

            // POST
            Route::post('atualizar/{id}', 'update')
            ->name('edit.update');
            // POST

        });
            //ROUTE EDIT-PESSOA

            //ROUTE EXIBIR-PESSOA
            Route::prefix('exibir-Pessoa')
            ->controller(ExibirController::class)
            ->middleware('auth')
            ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexVisualizar');
                Route::get('/exibirPessoa', 'edit')->name('visualizarPessoa');
            // GET

            // POST
               Route::post('exibir', 'store')
               ->name('exibir.store');
            // POST

        });
            //ROUTE EXIBIR-PESSOA

            //ROUTE EXCLUIR-PESSOA
            Route::prefix('excluir-Pessoa')
            ->controller(ExcluirController::class)
            ->middleware('auth')
            ->group(function () {

            // GET
                Route::get('/', 'index')->name('indexExcluir');
                Route::get('/excluirPessoa', 'edit')->name('excluirPessoa');
            // GET

            // POST
               Route::post('excluir/{id}', 'destroy')
               ->name('excluir.destroy');
            // POST

        });
            //ROUTE EXCLUIR-PESSOA

    // ROUTE ADOÇÃO
           
    // ROUTE ADOÇÃO


