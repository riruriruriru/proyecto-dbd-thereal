<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilidadesUser extends Model
{
    //
       protected $fillable = ['tipo_habilidad', 'id_user', ];
    protected $table = 'HabilidadesUser';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
