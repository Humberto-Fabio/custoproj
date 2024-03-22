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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_projeto');
            $table->integer('id_medicao');
            #$table->string('projeto',200);
            #$table->string('medicao',200);
            $table->string('entrega',200);
            $table->string('local',200);
            #$table->double('valor');
            #$table->double('conclusao');
            $table->date('data_inicio');
            $table->date('data_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
