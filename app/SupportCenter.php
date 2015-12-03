<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportCenter extends Model
{
    protected $fillable = [
        'name',
        'gps_lat',
        'gps_long',
    ];

    public function victims(){
        return $this->hasMany('App\Victim');
    }
}
