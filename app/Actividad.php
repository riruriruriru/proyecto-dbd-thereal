<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
     protected $fillable = ['actividad_id_evento', 'participantes_actividad', 'id_actividad', 'nombre_actividad', 'tipo',];
    protected $table = 'Actividad';
    public $timestamps = false;
    protected $primaryKey = 'id_actividad';
}
