<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroDeAcopio extends Model
{
    //
     protected $fillable = ['id_acopio', 'id_medidas_acopio', 'nombre', 'tipo_bien', 'direccion', 'cantidad', 'cantidad_objetivo', 'situacion', 'recibe', 'monto_actual', 'monto_total','latitud', 'longitud',];
    protected $table = 'CentroDeAcopio';
    public $timestamps = false;
    protected $primaryKey = 'id_acopio';
}
