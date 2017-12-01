<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrofe extends Model
{
    //
    protected $fillable = ['id_catastrofe','nombre', 'id_user','tipo_catastrofe','lugar_catastrofe','fecha_inicio', 'descripcion', 'latitud', 'longitud', 'nombre_tipo_catastrofe','fecha_termino', ];
    protected $table = 'Catastrofe';
    public $timestamps = false;
    protected $primaryKey = 'id_catastrofe';
}
