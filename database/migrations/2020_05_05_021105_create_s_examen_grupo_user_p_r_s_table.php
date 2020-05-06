<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSExamenGrupoUserPRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_examen_grupo_user_p_r_s', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje');
            $table->foreignId('s_examen_grupo_user_id')->references('id')->on('s_examen_grupo_users')->onDelete('cascade');
            $table->foreignId('s_examen_pregunta_id')->references('id')->on('s_examen_preguntas')->onDelete('cascade');
            $table->foreignId('s_examen_respuesta_id')->references('id')->on('s_examen_respuestas')->onDelete('cascade');
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
        Schema::dropIfExists('s_examen_grupo_user_p_r_s');
    }
}
