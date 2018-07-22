<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{   
    protected $table = 'incidentes';

    protected $fillable = [
      'fecha','area','reportado_por','turno', 'mp','mc','instalacion','asesoria','retiro','nombre_equipo',
      'marca','modelo','activo_fijo','num_serie','problema_reportado','probelma_encontrado','accion',
      'refac_usadas','observaciones','ingeniero_servicio',
      'report','aceptacion_de_servicio', 'equipo_id'
    ];
    
     /**
     * Obtiene el equipo al que pertenece este incidente.
     */
    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }
}
