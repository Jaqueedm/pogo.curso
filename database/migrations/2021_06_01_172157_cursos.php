<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //realizar una accion 
    public function up()
    {
        Schema::create('cursos',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('descripcion');
            $table->text('tipo_poke');
            $table->text('region');
            $table->text('genero');
            $table->timestamps();

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
        Schema::dropIfExists('cursos');
    }
}
