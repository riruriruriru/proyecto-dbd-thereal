<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Trabajo';
    public $timestamps = false;
    protected $primaryKey = 'id_trabajo';
}
