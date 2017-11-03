<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBeneficencia extends Model
{
    //
     protected $fillable = [];
    protected $table = 'TipoBeneficiencia';
    public $timestamps = false;
    protected $primaryKey = 'id_tipo_beneficiencia';
}