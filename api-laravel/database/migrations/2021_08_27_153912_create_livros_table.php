<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->integer('editora_id')->unsigned();
            $table->foreign('editora_id')->references('id')->on('editoras');
            $table->string('ano_lancamento');
            $table->string('titulo');
            $table->id()->unique();
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
        Schema::dropIfExists('livros');
    }
}
