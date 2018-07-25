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
        $table->string('num_serie',30);
        $table->string('marca',50);
        $table->string('modelo',50);
        $table->string('area',40);
        $table->boolean('status');
        $table->string('fijo',40);
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
