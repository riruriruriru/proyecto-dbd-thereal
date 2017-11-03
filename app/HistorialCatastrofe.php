<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialCatastrofe extends Model
{
    //
     protected $fillable = [];
    protected $table = 'HistorialCatastrofe';
    public $timestamps = false;
    protected $primaryKey = 'id_historial';
}
