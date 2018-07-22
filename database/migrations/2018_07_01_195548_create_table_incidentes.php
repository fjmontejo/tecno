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
            $table->date('fecha');
            $table->string('area',25);
            $table->string('reportado_por', 25);
            $table->string('turno',25)->nullable();;
            $table->boolean('mp')->default(0)->nullable();
            $table->boolean('mc')->default(0)->nullable();
            $table->boolean('instalacion')->default(0)->nullable();
            $table->boolean('asesoria')->default(0)->nullable();
            $table->boolean('retiro')->default(0)->nullable();
            $table->string('nombre_equipo',40);
            $table->string('marca',30);
            $table->string('modelo',30);
            $table->string('activo_fijo',40);
            $table->string('num_serie',40);
            $table->text('problema_reportado');
            $table->text('probelma_encontrado');
            $table->text('accion');
            $table->string('refac_usadas',100);
            $table->text('observaciones');
            $table->string('ingeniero_servicio',100);
            $table->string('report',100);
            $table->string('aceptacion_de_servicio',50);
           
           
            $table->unsignedInteger('equipo_id');
 
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
