<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victims extends Model
{
    protected $fillable = [
        'last_name',
        'firs_name',
        'gender',
        'address',
        'postal_code',
        'city',
        'country',
        'phone1',
        'phone2',
        'blood_type',
        'birth_date',
        'contraindication',
    ];

    protected $dates = [
        'birth_date'
    ];
}
