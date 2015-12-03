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

    protected $dates = [
        'begin_date',
        'end_date',
    ];
}
