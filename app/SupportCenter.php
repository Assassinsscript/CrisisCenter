<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportCenter extends Model
{
    protected $fillable = array('name', 'gps_lat', 'gps_long');
}
