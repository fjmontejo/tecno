<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReportePersonalsalud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_personalsalud', function (Blueprint $table) {
            //info de notificacion
            $table->increments('id');
            $table->string('num_ingresocof')->nullable();
            $table->string('num_noti')->nullable();
            $table->string('lugar_noti')->nullable();
            $table->date('fecha')->nullable();
            //identificacion del notificador
            $table->boolean('centro_estat')->default(0)->nullable();
            $table->boolean('centro_inst')->default(0)->nullable();
            $table->boolean('hospital')->default(0)->nullable();
            $table->boolean('consultorio')->default(0)->nullable();
            $table->boolean('laboratorio'3)->nullable();
            $table->string('otro_lug',50)->nullable();
            $table->string('iniciales_noti',10)->nullable();
            $table->string('email',50)->nullable();
            $table->string('area_adscri',50)->nullable();
            $table->boolean('presento')->default(0)->nullable();
            //datos del operador del dispositivo
            $table->string('iniciales_ope',30)->nullable();
            $table->boolean('tecnico')->default(0)->nullable();
            $table->boolean('enfermera')->default(0)->nullable();
            $table->boolean('medico')->default(0)->nullable();
            $table->boolean('paciente')->default(0)->nullable();
            $table->boolean('familiar')->default(0)->nullable();
            $table->string('otro_ope',40)->nullable();
            //identificacion del px
            $table->string('iniciales_px_clv',10)->nullable();
            $table->string('edad_px',10)->nullable(); 
            $table->string('peso_px',10)->nullable(); 
            $table->string('estatura_px',10)->nullable(); 
            $table->enum('genero', ['femenino', 'masculino']);
            $table->text('resumen_hclinic',100)->nullable();
            //info del incidente
            $table->date('fecha_incidente')->nullable(); 
            $table->string('lugar_estado',50)->nullable();
            $table->string('lugar_muni',50)->nullable();
            $table->string('lugar_locali',50)->nullable();
            $table->boolean('casa')->default(0)->nullable();
            $table->boolean('trabajo')->default(0)->nullable();
            $table->boolean('via_publica')->default(0)->nullable();
            $table->boolean('ambulancia')->default(0)->nullable();
            $table->text('otro_incidente',50)->nullable();
            $table->boolean('servicio')->default(0)->nullable();
            $table->string('nombre_institucion',50)->nullable();
            $table->string('domicilio',50)->nullable();
             //reporto a otro autoridad
            $table->boolean('autoridad')->default(0)->nullable();
            $table->string('quien',50)->nullable();
            $table->string('reporte',30)->nullable();
             //consecuencia del incidente
             $table->boolean('no_prendio')->default(0)->nullable();
             $table->boolean('toques')->default(0)->nullable();
             $table->boolean('quemo')->default(0)->nullable();
             $table->boolean('rompio')->default(0)->nullable();
             $table->boolean('cayo')->default(0)->nullable();
             $table->boolean('no_alarma')->default(0)->nullable();
             $table->boolean('empaque_malo')->default(0)->nullable();
             $table->boolean('reuso')->default(0)->nullable();
             $table->boolean('reacondicion')->default(0)->nullable();
             $table->boolean('error')->default(0)->nullable();
             $table->boolean('mal_funcionamiento')->default(0)->nullable();
             $table->boolean('desconexion')->default(0)->nullable();
             $table->boolean('info_confusa')->default(0)->nullable();
             $table->string('otro_evento',40)->nullable();
             $table->string('uso_diferente',40)->nullable();
             $table->boolean('luz_inadecua')->default(0)->nullable();
             $table->boolean('desconocimientofun')->default(0)->nullable();
             $table->boolean('interaccion_sustancias')->default(0)->nullable();
             $table->text('descripcionyconsequencia',50)->nullable();
             //consequencia del incidente
             $table->boolean('muerte')->default(0)->nullable();
             $table->boolean('intervencion_med')->default(0)->nullable();
             $table->boolean('intervencion_quir')->default(0)->nullable();
             $table->boolean('daño_indirecto')->default(0)->nullable();
             $table->boolean('daño_muertefetal')->default(0)->nullable();
             $table->boolean('deficiencia_permanente')->default(0)->nullable();
             $table->boolean('daño_permanente')->default(0)->nullable();
             $table->boolean('hospitalizacion')->default(0)->nullable();
             $table->string('otro_consequen',40)->nullable();
             //devuelto a
             $table->string('marcaodenom',40)->default(0)->nullable();
             $table->string('denominaciongene',40)->default(0)->nullable();
             $table->string('modelo_presentacion',40)->default(0)->nullable(); 
             $table->string('numero_lote',40)->default(0)->nullable();
             $table->string('nombre_fabricante',40)->default(0)->nullable();
             $table->string('numero_sanitario',40)->default(0)->nullable();

             $table->boolean('tratamiento')->default(0)->nullable();
             $table->boolean('diagnostico')->default(0)->nullable();
             $table->boolean('monitoreo')->nullable();
             $table->string('otro_uso',50)->nullable();
             $table->boolean('adulto')->default(0)->nullable();
             $table->boolean('pediatrico')->default(0)->nullable();
             $table->boolean('neonatal')->default(0)->nullable();
             $table->boolean('geriatrico')->default(0)->nullable();
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
             //conocimiento del funcionamiento
             $table->boolean('leidoinstruc')->default(0)->nullable();
             $table->boolean('uso_claro')->default(0)->nullable();
             $table->boolean('capacitacion')->default(0)->nullable();
             //
             $table->boolean('publico')->default(0)->nullable();
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
        Schema::dropIfExists('reporte_personalsalud');  
    }
}
