<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAquisicaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aquisicaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_completo');
            $table->string('celular');
            $table->integer('numero');
            $table->unsignedBigInteger('rifa_id');
            $table->foreign('rifa_id')->references('id')->on('rifas')->onDelete('cascade');
            $table->integer('status');
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
        Schema::dropIfExists('aquisicaos');
    }
}
