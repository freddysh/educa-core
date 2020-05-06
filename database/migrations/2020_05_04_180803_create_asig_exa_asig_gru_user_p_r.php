<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigExaAsigGruUserPR extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_exa_asig_gru_user_p_r', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje');
            $table->foreignId('asig_exa_pregunta_id')->references('id')->on('asig_exa_preguntas')->onDelete('cascade');
            $table->foreignId('asig_exa_respuesta_id')->references('id')->on('asig_exa_respuestas')->onDelete('cascade');
            $table->foreignId('asig_exa_asig_gru_user_id')->references('id')->on('asig_exa_asig_gru_user')->onDelete('cascade');
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
        Schema::dropIfExists('asig_exa_asig_gru_user_p_r');
    }
}
