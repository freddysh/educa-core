<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_examens', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->dateTime('fecha_inicio');
            $table->time('duracion');
            $table->text('descripcion');
            $table->integer('mostrar_web')->comment('0:no mostrar, 1:mostrar');
            $table->set('tipo',['banco_preguntas','asignaturas'])->default('banco_preguntas');
            $table->integer('estado');
            $table->foreignId('asignatura_grupo_id')->references('id')->on('asignatura_grupos')->onDelete('cascade');
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
        Schema::dropIfExists('s_examens');
    }
}
