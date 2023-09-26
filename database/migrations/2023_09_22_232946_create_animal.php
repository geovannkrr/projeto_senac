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
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id_animal');
            $table->varchar('nome',45);
            $table->varchar('tipo',45);
            $table->varchar('idade',10);
            $table->char('sexo',1);
            $table->varchar('cor',45);
            $table->varchar('vacinacao',45);
            $table->varchar('castracao',45);
            $table->varchar('descricao',45);
            $table->varchar('situacao',100);
            $table->varchar('vacina',45);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
