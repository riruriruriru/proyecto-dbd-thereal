<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    //
     protected $fillable = ['fecha_inicio_voluntariado','fecha_termino_voluntariado', 'cantidad_voluntarios', 'voluntarios_actuales', 'id_medidas_voluntariado', 'direccion', 'latitud', 'longitud', 'descripcion', 'nombre',];
    protected $table = 'Voluntariado';
    public $timestamps = false;
    protected $primaryKey = 'id_voluntariado';
}
