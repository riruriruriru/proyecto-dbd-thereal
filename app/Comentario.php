<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Comentario';
    public $timestamps = false;
    protected $primaryKey = 'id_comentario';
}
