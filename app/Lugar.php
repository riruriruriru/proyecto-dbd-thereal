<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Lugar';
    public $timestamps = false;
    protected $primaryKey = 'id_lugar';
}
