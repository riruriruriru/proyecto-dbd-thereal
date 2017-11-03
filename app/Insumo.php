<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    //
     protected $fillable = [];
    protected $table = 'Insumo';
    public $timestamps = false;
    protected $primaryKey = 'id_insumo';
}
