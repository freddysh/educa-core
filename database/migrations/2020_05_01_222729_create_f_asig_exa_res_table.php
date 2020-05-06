<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAsigExaResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_asig_exa_res', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->integer('correcta');
            $table->foreignId('f_asig_exa_pre_id')->references('id')->on('f_asig_exa_pres')->onDelete('cascade');
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
        Schema::dropIfExists('f_asig_exa_res');
    }
}
