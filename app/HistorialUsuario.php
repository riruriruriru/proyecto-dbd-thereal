<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialUsuario extends Model
{
    //
     protected $fillable = [];
    protected $table = 'HistorialUsuario';
    public $timestamps = false;
    protected $primaryKey = 'id_historial_usuario';
}
