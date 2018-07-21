<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporpx extends Model
{
    protected $table = 'reporte_usuarios';

    protected $fillable = [
        'num_cofe','num_noti', 'lugar_esta','lugar_muni','lugar_locali', 'fecha', 'iniciales_notificador', 'email', 'presento_incidente_si','presento_incidente_no','parentezco', 'iniciales_px', 'edad_px', 
        'peso_px','estatura_px', 'genero', 'fecha_incidente', 'lugar_estado','lugar_municipio','lugar_localidad' ,'casa', 'trabajo', 'via_publica', 'ambulancia', 
        'otro_incidente','servicio_pub','servicio_priv','nombre_institucion', 'domicilio', 'autoridad_si','autoridad_no', 'quien', 'reporte', 'descripcion', 'muerte', 
        'intervencion_med', 'intervencion_quir','daño_indirecto', 'daño_muertefetal', 'deficiencia_permanente', 'daño_permanente', 
        'hospitalizacion', 'otro_consequen','nombre_dispo','modelo_dispo','num_dispo', 'desconocido', 'destruido', 'fuera_servicio', 'en_uso', 
        'otro_situa', 'fabricante', 'distribuidor', 'comercializador', 'otro_devuelto', 'hacer_publico_si','hacer_publico_no','equipo_id'
       ];

       public function equipo()
       {
           return $this->belongsTo('App\Equipo');
       }

}
