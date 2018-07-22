<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReporteFabricante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('reporte_fabricante', function (Blueprint $table) {
            //info de notificacion
            $table->increments('id');
            $table->string('num_ingresocof')->nullable();
            $table->string('num_noti')->nullable();
            $table->boolean('noti_ini')->default(0)->nullable();
            $table->boolean('repor_segui')->default(0)->nullable();
            $table->boolean('repor_fin')->default(0)->nullable();
            $table->boolean('notini_repfin')->default(0)->nullable();
            $table->string('num_reporemp')->nullable();
            $table->string('num_sanita')->nullable();
            $table->date('fecha_avisotitu')->nullable();
            $table->date('fecha_noti')->nullable();
            //identificacion del notificador
            $table->boolean('titu_sanita')->default(0)->nullable();
            $table->boolean('fabricante_noti')->default(0)->nullable();
            $table->boolean('distri_noti')->default(0)->nullable();
            $table->boolean('comer_noti')->default(0)->nullable();
            $table->string('nombre_razoempre',50)->nullable();
            $table->string('rfc',40)->nullable();
            $table->string('iniciales_noti',45)->nullable();
            $table->string('nombre_seguimiento',60)->nullable();
            //Datos del operador del dispositivo durante el incidente
            $table->string('iniciales_ope',35)->nullable();
            $table->boolean('tecnico')->default(0)->nullable();
            $table->boolean('enfermera')->default(0)->nullable();
<<<<<<< HEAD
            $table->boolean('medico',25)->nullable();
=======
            $table->booelan('medico',25)->nullable();
>>>>>>> 9eb4565852a49d20d53bdd5ff82b36e0f1019b89
            $table->boolean('paciente')->default(0)->nullable();
            $table->boolean('familiar')->default(0)->nullable();
            $table->string('otro_ope',25)->nullable();
            //identificacion del px
            $table->string('iniciales_px',25)->nullable();
            $table->string('edad_px',25)->nullable(); 
            $table->string('peso_px',25)->nullable(); 
            $table->string('estatura_px',25)->nullable(); 
            $table->enum('genero', ['femenino', 'masculino']);
            
            //info del incidente
            $table->date('fecha_incidente')->nullable(); 
            $table->boolean('evento')->default(0)->nullable();
            $table->boolean('incidente')->default(0)->nullable();
            $table->boolean('incidente_adverso')->default(0)->nullable();
            $table->boolean('inci_previsto')->default(0)->nullable();
            $table->boolean('inci_imprevisto')->default(0)->nullable();
            $table->string('lugar_estado',40)->nullable();
            $table->string('lugar_muni',40)->nullable();
            $table->string('lugar_locali',40)->nullable();
            $table->boolean('casa')->default(0)->nullable();
            $table->boolean('trabajo')->default(0)->nullable();
            $table->boolean('via_publica')->default(0)->nullable();
            $table->boolean('ambulancia')->default(0)->nullable();
            $table->text('otro_incidente',50)->nullable();
            $table->boolean('servicio')->default(0)->nullable();
            $table->string('nombre_institucion',20)->nullable();
            $table->string('domicilio',50)->nullable();
             //reporto a otro autoridad
            $table->boolean('autoridad')->default(0)->nullable();
            $table->string('quien',50)->nullable();
            $table->string('num_repor',50)->nullable();
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
             $table->string('otro_evento',60)->nullable();
             $table->string('uso_diferente',65)->nullable();
             $table->boolean('luz_inadecua')->default(0)->nullable();
             $table->boolean('desconocimientofun')->default(0)->nullable();
             $table->boolean('interaccion_sustancias')->default(0)->nullable();
             $table->text('descripcion_incidente',100)->nullable();
             //consequencia del incidente
             $table->boolean('muerte')->default(0)->nullable();
             $table->boolean('intervencion_med')->default(0)->nullable();
             $table->boolean('intervencion_quir')->default(0)->nullable();
             $table->boolean('daño_indirecto')->default(0)->nullable();
             $table->boolean('daño_muertefetal')->default(0)->nullable();
             $table->boolean('deficiencia_permanente')->default(0)->nullable();
             $table->boolean('daño_permanente')->default(0)->nullable();
             $table->boolean('hospitalizacion')->default(0)->nullable();
             $table->string('otro_consequen',60)->nullable();
             $table->string('conse_inci_descripcion',50)->nullable();
             //devuelto a
             $table->string('marcaodenom',50)->nullable();
             $table->string('denominaciongene',50)->nullable();
             $table->string('modelo_presentacion',50)->nullable(); 
             $table->string('numero_lote',50)->nullable();
             $table->string('version_software',50)->nullable();
             $table->string('descri_dispo',50)->nullable();
            //tipo de dispositivo medico
             $table->boolean('equipo_medico')->default(0)->nullable();
             $table->boolean('protesis')->default(0)->nullable();
             $table->boolean('agente_diagnos')->nullable();
             $table->boolean('insumo_odonto')->nullable();
             $table->boolean('mate_quiru')->nullable();
             $table->boolean('produc_higienicos')->nullable();
             $table->string('otro_tipo',60)->nullable();
             $table->enum('clasificacion',['clase1', 'clase2', 'clase3']);
             //uso del dispositivo
             $table->boolean('tratamiento')->default(0)->nullable();
             $table->boolean('diagnostico')->default(0)->nullable();
             $table->boolean('monitoreo')->default(0)->nullable();
             $table->string('otro_uso')->nullable();
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
             $table->boolean('titu_sanitario')->default(0)->nullable();
             $table->boolean('fabricante')->default(0)->nullable();
             $table->boolean('distribuidor')->default(0)->nullable();
             $table->string('otro_devuelto',50)->nullable();
             //seguimiento y cierre
             $table->text('acciones_preven',100)->nullable();
             $table->text('acciones_correc',100)->nullable();
             $table->text('acciones_seguricampo',100)->nullable();
             $table->text('valor_limite',100)->nullable();
             // en caso de reporte de seguimiento
             $table->text('avances_investigacion',100)->nullable();
             $table->text('resultados_preliminares',100)->nullable();
             //en caso de reporte final
             $table->text('causa_raiz')->nullable();
             $table->text('resultados_conclusiones')->nullable();
             $table->text('info_interes')->nullable();
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
            Schema::dropIfExists('reporte_fabricante');  
        }
   
}
