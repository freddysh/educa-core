<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSExamenGrupoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_examen_grupo_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asigantura_grupo_user_id')->references('id')->on('asigantura_grupo_user')->onDelete('cascade');
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
        Schema::dropIfExists('s_examen_grupo_users');
    }
}
