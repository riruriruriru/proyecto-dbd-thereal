<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donantes extends Model
{
    //
     protected $fillable = ['id_donante', 'id_donacion_donante', 'id_usuario', 'monto',];
    protected $table = 'Donantes';
    public $timestamps = false;
    protected $primaryKey = 'id_donante';
}
