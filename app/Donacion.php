<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Donacion';
    public $timestamps = false;
    protected $primaryKey = 'id_donacion';
}
