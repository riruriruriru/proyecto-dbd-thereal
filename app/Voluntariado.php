<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Voluntariado';
    public $timestamps = false;
    protected $primaryKey = 'id_voluntariado';
}
