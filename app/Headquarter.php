<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = ['name', 'gps_lat', 'gps_long'];

    public function crisis()
    {
        return $this->belongsTo(Crisis::class);
    }

    public function support_centers()
    {
        return $this->hasMany(SupportCenter::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}