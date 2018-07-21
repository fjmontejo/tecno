<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporfabricante extends Model
{   
    protected $table = 'reporte_fabricante';
    protected $fillable = [
        'num_ingresocof','num_noti','noti_ini','repor_segui','repor_fin','notini_repfin','num_reporemp','num_sanita',
        'fecha_avisotitu'.'fecha_noti','titu_sanita'.'fabricante_noti'.'distri_noti','comer_noti','nombre_razoempre',
        'rfc','iniciales_noti','nombre_seguimiento','iniciales_ope', 'tecnico', 'enfermera', 'medico', 'paciente', 
        'familiar','otro_ope','iniciales_px','edad_px', 'peso_px', 'estatura_px','genero', 'fecha_incidente','evento',
        'incidente','incidente_adverso','inci_previsto','inci_imprevisto', 'lugar_estado', 'lugar_muni', 'lugar_locali',
         'casa','trabajo', 'via_publica', 'ambulancia', 'otro_incidente','servicio_pub', 'servicio_priv', 'nombre_institucion',
        'domicilio', 'autoridad_si', 'autoridad_no','quien', 'num_repor','no_prendio', 'toques', 'quemo', 'rompio','cayo',
        'no_alarma','empaque_malo','reuso','reacondicion','error','mal_funcionamiento','desconexion','info_confusa',
        'otro_evento','uso_diferente','luz_inadecua','desconocimientofun','interaccion_sustancias','descripcion_incidente',
        'muerte','intervencion_med','intervencion_quir','daño_indirecto','daño_muertefetal','deficiencia_permanente',
        'daño_permanente','hospitalizacion','otro_consequen','conse_inci_descripcion','marcaodenom','denominaciongene',
        'modelo_presentacion','numero_lote','version_software','descri_dispo','equipo_medico','protesis','agente_diagnos',
        'insumo_odonto','mate_quiru','produc_higienicos','otro_tipo','clasificacion','tratamiento','diagnostico','monitoreo',
        'otro_uso','adulto','pediatrico','neonatal','geriatrico','desconocido','destruido','fuera_servicio','en_uso','otro_situa',
        'titu_sanitario','fabricante','distribuidor','otro_devuelto','acciones_preven','acciones_correc','acciones_seguricampo',
        'valor_limite','avances_investigacion','resultados_preliminares','causa_raiz','resultados_conclusiones','info_interes',
        'publico_si','publico_no','equipo_id'
        
       ];
 /**
     * Obtiene el equipo al que pertenece este incidente.
     */
    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }
}
