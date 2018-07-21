<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre', 'apellidos', 'edad' 
       ];

    /**
     * Get the user that owns the person.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
