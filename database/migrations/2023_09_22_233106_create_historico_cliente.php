<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historico_cliente', function (Blueprint $table) {
            $table->increments('id_historico_cliente');
            $table->date('data_adocao');
            $table->varchar('qtde_animais',45);
            $table->varchar('tipo_animal',45);
            $table->varchar('raca_animal',45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_cliente');
    }
};
