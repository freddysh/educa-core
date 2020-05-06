<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAporteRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aporte_respuestas', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->foreignId('aporte_id')->references('id')->on('aportes')->onDelete('cascade');
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
        Schema::dropIfExists('aporte_respuestas');
    }
}
