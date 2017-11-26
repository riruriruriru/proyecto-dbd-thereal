<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RNVUsers extends Model
{
    //
    protected $fillable = ['id', 'id_rnv', 'id_usuario', ];
    protected $table = 'RNVUsers';
    public $timestamps = false;
}
