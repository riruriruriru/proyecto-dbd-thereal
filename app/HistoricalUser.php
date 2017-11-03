<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricalUser extends Model
{
    //
     protected $fillable = [];
    protected $table = 'HistoricalUser';
    public $timestamps = false;
    protected $primaryKey = 'id_historical';
}
