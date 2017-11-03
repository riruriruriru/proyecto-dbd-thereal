<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Voluntario';
    public $timestamps = false;
    protected $primaryKey = 'id_voluntario';
}
