<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('equipos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre',50);
        $table->string('num_serie',10);
        $table->string('marca',20);
        $table->string('modelo',20);
        $table->string('area',20);
        $table->boolean('status');
        $table->string('fijo',20);
        $table->string('tipo');
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
        Schema::dropIfExists('equipos');
    }
}
