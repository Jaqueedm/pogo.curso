<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pokemones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //realizar una accion
    public function up()
    {
        Schema::create('pokemones', function (Blueprint $table) {
            $table->id() ;
            $table->string('name', 50);
            //$table->string('url');
            $table->string('slug');
            $table->text('descripcion');
            $table->text('tipo_poke');
        
            $table->text('genero');
            $table->timestamps();

            $table->unsignedBigInteger('region');

            $table->foreign('region')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //revertir una accion
    public function down()
    {
        Schema::dropIfExists('pokemones');
    }
}
