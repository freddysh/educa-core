<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAsignaturaExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_asignatura_examens', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('detalle');
            $table->foreignId('f_asignatura_id')->references('id')->on('f_asignaturas')->onDelete('cascade');
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
        Schema::dropIfExists('f_asignatura_examens');
    }
}
