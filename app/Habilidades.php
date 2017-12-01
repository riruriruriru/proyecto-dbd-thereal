<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    //
    protected $fillable = ['tipo_habilidad',];
    protected $table = 'Habilidades';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
