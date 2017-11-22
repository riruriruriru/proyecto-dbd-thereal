<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidas extends Model
{
    //
     protected $fillable = ['id_usuario', 'nombre_medida', 'id_organizacion_medidas', 'fecha_inicio_medida', 'fecha_termino_medida', 'descripcion', 'publico', 'id_historial', 'id_catastrofe_medidas'];
    protected $table = 'Medidas';
    public $timestamps = false;
    protected $primaryKey = 'id_medidas';

}
