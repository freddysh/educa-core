<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFSubTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_sub_temas', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->string('uri');
            $table->text('descripcion');
            // $table->enum('tipo', ['consideraciones','teoria','practica'])->default('teoria');
            $table->integer('orden');
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
        Schema::dropIfExists('f_sub_temas');
    }
}
