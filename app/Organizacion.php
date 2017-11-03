<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Organizacion';
    public $timestamps = false;
    protected $primaryKey = 'id_organizacion';
}
