<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReporteUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_usuarios', function (Blueprint $table) {
            //info de notificacion
            $table->increments('id');
            $table->string('num_cofe')->nullable();
            $table->string('num_noti')->nullable();
            $table->string('lugar_esta')->nullable();
            $table->string('lugar_muni')->nullable();
            $table->string('lugar_locali')->nullable();
            $table->date('fecha')->nullable();
            $table->string('iniciales_notificador',30)->nullable();
            $table->string('email',50)->nullable();
            $table->boolean('presento_incidente_si')->default(0)->nullable();
            $table->boolean('presento_incidente_no')->default(0)->nullable();
            $table->string('parentezco', 30)->nullable();
            //identificacion del px
            $table->string('iniciales_px',30)->nullable();
            $table->string('edad_px',30)->nullable(); 
            $table->string('peso_px',30)->nullable(); 
            $table->string('estatura_px',30)->nullable(); 
            $table->enum('genero', ['femenino', 'masculino']);
            //info del incidente
            $table->date('fecha_incidente')->nullable(); 
            $table->string('lugar_estado',50)->nullable();
            $table->string('lugar_municipio',50)->nullable();
            $table->string('lugar_localidad',50)->nullable();
            $table->boolean('casa')->default(0)->nullable();
            $table->boolean('trabajo')->default(0)->nullable();
            $table->boolean('via_publica')->default(0)->nullable();
            $table->boolean('ambulancia')->default(0)->nullable();
            $table->text('otro_incidente')->nullable();
            $table->boolean('servicio_pub')->default(0)->nullable();
            $table->boolean('servicio_priv')->default(0)->nullable();
            $table->string('nombre_institucion')->nullable();
            $table->string('domicilio',50)->nullable();
             //reporto a otro autoridad
            $table->boolean('autoridad_si')->default(0)->nullable();
            $table->boolean('autoridad_no')->default(0)->nullable();
            $table->string('quien',50)->nullable();
            $table->string('reporte',30)->nullable();
            $table->text('descripcion',30)->nullable();
             
             //consecuencia del incidente
             $table->boolean('muerte')->default(0)->nullable();
             $table->boolean('intervencion_med')->default(0)->nullable();
             $table->boolean('intervencion_quir')->default(0)->nullable();
             $table->boolean('daño_indirecto')->default(0)->nullable();
             $table->boolean('daño_muertefetal')->default(0)->nullable();
             $table->boolean('deficiencia_permanente')->default(0)->nullable();
             $table->boolean('daño_permanente')->default(0)->nullable();
             $table->boolean('hospitalizacion')->default(0)->nullable();
             // $table->boolean('intervencion')->default(0)->nullable();
             $table->string('otro_consequen',50)->nullable();
             $table->string('nombre_dispo',40)->nullable();
             $table->string('modelo_dispo',40)->nullable();
             $table->string('num_dispo',40)->nullable();
             //ubicacion situacion del dispositivo
             $table->boolean('desconocido')->default(0)->nullable();
             $table->boolean('destruido')->default(0)->nullable();
             $table->boolean('fuera_servicio')->default(0)->nullable();
             $table->boolean('en_uso')->default(0)->nullable();  
             $table->string('otro_situa',50)->nullable();
             //devuelto a
             $table->boolean('fabricante')->default(0)->nullable();
             $table->boolean('distribuidor')->default(0)->nullable();
             $table->boolean('comercializador')->default(0)->nullable();
             $table->string('otro_devuelto',50)->nullable();
             $table->boolean('hacer_publico_si')->default(0)->nullable();
             $table->boolean('hacer_publico_no')->default(0)->nullable();
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
        Schema::dropIfExists('reporte_usuarios');  
    }
}
