<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoActividad';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_actividad';
}