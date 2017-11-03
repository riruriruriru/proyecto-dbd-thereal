<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialMedidas extends Model
{
    //
     protected $fillable = [];
    protected $table = 'HistorialMedidas';
    public $timestamps = false;
    protected $primaryKey = 'id_historial';
}
