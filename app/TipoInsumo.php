<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInsumo extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoInsumo';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_insumo';
}
