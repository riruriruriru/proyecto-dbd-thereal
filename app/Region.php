<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Region';
    public $timestamps = false;
    protected $primaryKey = 'id_region';
}
