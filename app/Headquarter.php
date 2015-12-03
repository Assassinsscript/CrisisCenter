<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = array('name', 'gps_lat', 'gps_long');

    public function crisis()
    {
        return $this->hasMany('App\Crisis');
    }
}