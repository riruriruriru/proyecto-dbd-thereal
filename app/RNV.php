<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RNV extends Model
{
    //
     protected $fillable = ['id_rnv', 'disponibilidad',];
    protected $table = 'RNV';
    public $timestamps = false;
    protected $primaryKey = 'id_rnv';
}
