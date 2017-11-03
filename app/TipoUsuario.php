<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoUsuario';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo';
}
