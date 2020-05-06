<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFRespuestaTriviasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_respuesta_trivias', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('correcta');
            $table->foreignId('f_pregunta_trivia_id')->references('id')->on('f_pregunta_trivias')->onDelete('cascade');
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
        Schema::dropIfExists('f_respuesta_trivias');
    }
}
