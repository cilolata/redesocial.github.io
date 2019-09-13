<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('dataEvento');
            $table->string('imagem');
            $table->unsignedBigInteger('fk_categorias');
            $table->unsignedBigInteger('fk_users');
            $table->timestamps();
            
            
            
            $table->foreign('fk_categorias')->references('id')->on('categorias');
            $table->foreign('fk_users')->references('id')->on('users');
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