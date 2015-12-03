<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crisis extends Model
{
    protected $fillable = [
        'name',
        'begin_date',
        'end_date',
        'type',
        'location',
    ];

<<<<<<< HEAD
    protected $dates = [
        'begin_date',
        'end_date',
    ];
=======
    protected $dates = array('begin_date', 'end_date');

    public function headquarter(){
        return $this->belongsTo('App\Headquarter');
    }
>>>>>>> 13c5ed15e3357f6b6fd82d60642d1b2311ebc7e1
}
