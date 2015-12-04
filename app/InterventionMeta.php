<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterventionMeta extends Model
{
    public $fillable = [
        'intervention_id',
        'key',
        'value',
    ];


}
