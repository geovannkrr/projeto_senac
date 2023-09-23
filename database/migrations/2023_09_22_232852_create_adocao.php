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
        Schema::create('adocao', function (Blueprint $table) {
            $table->increments('id_adocao');
            $table->varchar('num_pedido',45);
            $table->varchar('endereco_cliente',100);
            $table->varchar('porte_animal',45);
            $table->varchar('cor_animal',45);
            $table->varchar('raca_animal',45);
            $table->varchar('cep_cliente',10);
            $table->varchar('tipo_animal',45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocao');
    }
};
