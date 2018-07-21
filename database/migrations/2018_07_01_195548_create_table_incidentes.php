<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIncidentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('criterio',100);
            $table->text('accion');
            $table->string('report',100);
            $table->unsignedInteger('equipo_id');
            $table->string('refac_usadas',100);
            $table->text('observaciones');
            $table->foreign('equipo_id')->references('id')->on('equipos')
            ->onDelete('cascade')->onUpdate('cascade ');
          
            
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
        Schema::dropIfExists('incidentes');  
    }
}
