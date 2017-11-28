<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
     protected $fillable = ['id_donacion', 'id_medidas_donacion', 'numero_cuenta', 'monto_actual', 'objetivo','nombre', 'fecha_inicio', 'fecha_termino', ];
    protected $table = 'Donacion';
    public $timestamps = false;
    protected $primaryKey = 'id_donacion';
}
