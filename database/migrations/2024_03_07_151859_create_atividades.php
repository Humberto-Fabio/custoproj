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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->integer('id_projeto');
            $table->string('projeto',200);
            $table->integer('id_medicao');
            $table->string('medicao',200);
            $table->integer('id_entrega');
            $table->string('entrega',200);
            $table->string('atividade',200);
            $table->string('descricao',200);
            $table->double('valor');
            $table->double('concluido');
            $table->double('duracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
