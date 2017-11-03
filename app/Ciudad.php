<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Ciudad';
    public $timestamps = false;
    protected $primaryKey = 'id_ciudad';
}
