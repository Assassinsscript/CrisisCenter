<?php

namespace App;

use Carbon\Carbon;
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
        'support_center_id',
    ];

    public function supportCenter()
    {
        return $this->belongsTo('App\SupportCenter');
    }

    public function setBirthDateAttributes($value)
    {
        $this->attributes['birth_day'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getBirthDateAttributes()
    {
        return Carbon::createFromFormat('Y-m-d', $this->birth_day)->format('d/m/Y');
    }

}
