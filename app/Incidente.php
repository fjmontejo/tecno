<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{   
    protected $table = 'incidentes';

    protected $fillable = [
      'criterio', 'accion', 'report', 'equipo_id', 'refac_usadas','observaciones'
    ];
    
     /**
     * Obtiene el equipo al que pertenece este incidente.
     */
    public function equipo()
    {
        return $this->belongsTo('App\Equipo');
    }
}
