<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsigExaAsigGruUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asig_exa_asig_gru_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignatura_examen_id')->references('id')->on('asignatura_examens')->onDelete('cascade');
            $table->foreignId('asignatura_grupo_user_id')->references('id')->on('asigantura_grupo_user')->onDelete('cascade');
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
        Schema::dropIfExists('asig_exa_asig_gru_user');
    }
}
