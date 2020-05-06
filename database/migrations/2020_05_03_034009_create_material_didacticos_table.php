<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialDidacticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_didacticos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->string('uri');
            $table->text('descripcion');
            $table->foreignId('sub_tema_id')->references('id')->on('sub_temas')->onDelete('cascade');
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
        Schema::dropIfExists('material_didacticos');
    }
}
