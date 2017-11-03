<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTrabajo extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoTrabajo';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_trabajo';
}
