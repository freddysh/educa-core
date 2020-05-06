<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenCondicion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_condicion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->references('id')->on('temas')->onDelete('cascade');
            $table->foreignId('s_examen_id')->references('id')->on('s_examens')->onDelete('cascade');
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
        Schema::dropIfExists('examen_condicion');
    }
}
