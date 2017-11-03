<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Comuna';
    public $timestamps = false;
    protected $primaryKey = 'id_comuna';
}
