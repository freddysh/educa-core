<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFMaterialDidacticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_material_didacticos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->string('uri');
            $table->text('descripcion');
            $table->foreignId('f_sub_tema_id')->references('id')->on('f_sub_temas')->onDelete('cascade');
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
        Schema::dropIfExists('f_material_didacticos');
    }
}
