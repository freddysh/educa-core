<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAsignaturaExamenFTema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_asignatura_examen_f_tema', function (Blueprint $table) {
            $table->id();
            $table->foreignId('f_asignatura_examen_id')->references('id')->on('f_asignatura_examens')->onDelete('cascade');
            $table->foreignId('f_tema_id')->references('id')->on('f_temas')->onDelete('cascade');
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
        Schema::dropIfExists('f_asignatura_examen_f_tema');
    }
}
