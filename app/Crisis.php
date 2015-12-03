<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crisis extends Model
{
    protected $fillable = array('name', 'begin_date', 'end_date', 'type', 'location');

    protected $dates = array('begin_date', 'end_date');

    public function headquarter(){
        return $this->belongsTo('App\Headquarter');
    }
}
