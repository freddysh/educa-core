<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAsigExaPresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_asig_exa_pres', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->foreignId('f_asig_examen_id')->references('id')->on('f_asignatura_examens')->onDelete('cascade');
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
        Schema::dropIfExists('f_asig_exa_pres');
    }
}
