<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    protected $fillable = [
        'type'
    ];

    public static function metas()
    {
        return [
            'movement' => [
                'source_support_center_id',
                'destination_support_center_id',
            ],
            'medication' => [
                'product_id',
            ],
            'treatment' => [
                'product_id',
            ],
            'death' => [

            ],
            'evacuation' => [
                'destination',
            ],
        ];
    }

    public function createMetas()
    {
        $metas = self::metas();

        if (!$this->exists || !array_key_exists($this->type, $metas)) {
            return false;
        }

        foreach ($metas[$this->type] as $meta_key) {
            InterventionMeta::firstOrCreate([
                'intervention_id' => $this->id,
                'key' => $meta_key,
            ]);
        }

        return true;
    }
}
