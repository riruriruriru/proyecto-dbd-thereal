<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoluntariadoUser extends Model
{
    //
      protected $fillable = ['id_trabajo', 'id_user', 'id_trabajo', 'id_voluntariado', ];
    protected $table = 'VoluntariadoUser';
    public $timestamps = false;
    protected $primaryKey = 'id';

}
