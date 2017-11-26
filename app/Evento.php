<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
     protected $fillable = ['fecha_inicio_evento','fecha_termino_evento', 'cantidad_voluntarios', 'voluntarios_actuales', 'monto_recaudado', 'id_medidas_evento', 'direccion', 'latitud', 'longitud', 'monto_objetivo', 'descripcion',];
    protected $table = 'Evento';
    public $timestamps = false;
    protected $primaryKey = 'id_evento';
}
