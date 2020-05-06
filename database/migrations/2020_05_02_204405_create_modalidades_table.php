<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidades', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('mostrar_web')->comment('0:no mostrar, 1:mostrar');
            $table->set('tipo',['banco_preguntas','asignaturas'])->default('banco_preguntas');
            $table->integer('estado');
            $table->foreignId('puntaje_id')->references('id')->on('puntajes')->onDelete('cascade');
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
        Schema::dropIfExists('modalidades');
    }
}
