<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    //
     protected $fillable = ['trabajo_id_voluntariado', 'participantes_trabajo', 'id_trabajo', 'nombre_trabajo', 'tipo',];
    protected $table = 'Trabajo';
    public $timestamps = false;
    protected $primaryKey = 'id_trabajo';
}
