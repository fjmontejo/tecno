<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporsalud extends Model
{
    protected $table = 'reporte_personalsalud';

    protected $fillable = [
        'num_ingresocof','num_noti', 'lugar_noti', 'fecha', 'centro_estat', 'centro_inst', 'hospital','consultorio','laboratorio', 'otro_lug', 'iniciales_noti', 
        'email','area_adscri', 'presento','iniciales_ope', 'tecnico', 'enfermera', 'medico', 'paciente', 
        'familiar','otro_ope','iniciales_px_clv','edad_px', 'peso_px', 'estatura_px','genero', 'resumen_hclinic', 'fecha_incidente', 'lugar_estado', 'lugar_muni', 
        'lugar_locali', 'casa','trabajo', 'via_publica', 'ambulancia', 'otro_incidente', 
        'servicio','nombre_institucion', 'domicilio', 'autoridad',  
        'quien', 'reporte', 'no_prendio', 'toques', 'quemo', 'rompio','cayo','no_alarma','empaque_malo','reuso','reacondicion',
        'error','mal_funcionamiento','desconexion','info_confusa','otro_evento','uso_diferente','luz_inadecua','desconocimientofun',
        'interaccion_sustancias','descripcionyconsequencia','muerte','intervencion_med','intervencion_quir','daño_indirecto',
        'daño_muertefetal','deficiencia_permanente','daño_permanente','hospitalizacion','otro_consequen','marcaodenom','denominaciongene',
        'modelo_presentacion','numero_lote','nombre_fabricante','numero_sanitario','tratamiento','diagnostico','monitoreo','otro_uso',
        'adulto','pediatrico','neonatal','geriatrico','desconocido','destruido','fuera_servicio','en_uso','otro_situa','fabricante',
        'distribuidor','comercializador','otro_devuelto','leidoinstruc','uso_claro','capacitacion',
        'publico','equipo_id'
        
       ];

       public function equipo()
       {
           return $this->belongsTo('App\Equipo');
       }

}
