<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'nombre', 'num_serie', 'marca', 'modelo', 'area', 'status', 'fijo', 'tipo'
    ];

    /**
     * Obtiene todos los incidentes del equipo.
     */
    public function incidentes()
    {
        return $this->hasMany('App\Incidente');
    }
}
