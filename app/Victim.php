<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    protected $fillable = [
        'lastname',
        'firsname',
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

    public function supportCenter(){
        return $this->belongsTo('App\SupportCenter');
    }

}
