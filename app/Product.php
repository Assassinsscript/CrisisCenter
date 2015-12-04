<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'type',
    ];

    public function support_centers()
    {
        return $this->belongsToMany(SupportCenter::class)->withPivot('stock');
    }

}
