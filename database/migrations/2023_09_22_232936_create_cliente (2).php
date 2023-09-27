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
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->varchar('nome',45);
            $table->varchar('idade',10);
            $table->varchar('cpf',45);
            $table->varchar('email',45);
            $table->varchar('telefone',20);
            $table->varchar('cep',10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
