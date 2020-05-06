<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsiganturaGrupoUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigantura_grupo_user', function (Blueprint $table) {
            $table->id();
            $table->dateTime('desde');
            $table->dateTime('hasta');
            $table->decimal('costo_total',8,2);
            $table->integer('estado')->comment('0:sin acceso, 1:con acceso');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('asignatura_grupo_id')->references('id')->on('asignatura_grupos')->onDelete('cascade');
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
        Schema::dropIfExists('asigantura_grupo_user');
    }
}
