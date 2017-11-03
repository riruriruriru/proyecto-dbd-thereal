<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donantes extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Donantes';
    public $timestamps = false;
    protected $primaryKey = 'id_donante';
}
