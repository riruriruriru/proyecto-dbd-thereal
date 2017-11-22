<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidas extends Model
{
    //
     protected $fillable = ['nombre', 'id_organizacion', 'fecha_inicio_medida', 'fecha_termino_medida', 'descripcion'];
    protected $table = 'Medidas';
    public $timestamps = false;
    protected $primaryKey = 'id_medidas';
}
