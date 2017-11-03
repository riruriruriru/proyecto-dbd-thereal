<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Evento';
    public $timestamps = false;
    protected $primaryKey = 'id_evento';
}
