<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Actividad';
    public $timestamps = false;
    protected $primaryKey = 'id_actividad';
}
