<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->integer('estado')->comment('0:no vio el video, 1:vio el video');
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
        Schema::dropIfExists('eventos');
    }
}
