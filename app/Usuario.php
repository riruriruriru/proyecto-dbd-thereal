<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = [];
    protected $table = 'Usuario';
    public $timestamps = false;
    protected $primaryKey = 'email';

}
