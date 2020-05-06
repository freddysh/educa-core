<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigGruUserPreTrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_gru_user_pre_tris', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje');
            $table->foreignId('pregunta_trivia_id')->references('id')->on('pregunta_trivias')->onDelete('cascade');
            $table->foreignId('respuesta_trivia_id')->references('id')->on('respuesta_trivias')->onDelete('cascade');
            $table->foreignId('asigantura_grupo_user_id')->references('id')->on('asigantura_grupo_user')->onDelete('cascade');
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
        Schema::dropIfExists('asig_gru_user_pre_tris');
    }
}
