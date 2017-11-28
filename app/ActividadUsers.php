<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadUsers extends Model
{
    //
    protected $fillable = ['id_actividad', 'id_user', 'id_actividad', 'id_evento', ];
    protected $table = 'ActividadUsers';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
