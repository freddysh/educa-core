<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigExaRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_exa_respuestas', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('correcta');
            $table->foreignId('asig_exa_pregunta_id')->references('id')->on('asig_exa_preguntas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asig_exa_respuestas');
    }
}
