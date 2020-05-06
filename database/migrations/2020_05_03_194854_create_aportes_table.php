<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->id();
            $table->text('titulo')->comment('aporte de un aulmno sobre un tema');
            $table->set('tipo',['Pregunta','Aporte'])->default('Pregunta');
            $table->foreignId('sub_tema_id')->references('id')->on('sub_temas')->onDelete('cascade');
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
        Schema::dropIfExists('aportes');
    }
}
