<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCatastrofe extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoCatastrofe';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_catastrofe';
}
