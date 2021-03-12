<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;

class Area_price extends Model
{
    protected $table = 'area_prices';
    protected $fillable = [
        'transportation_area_id', 'price', 'status_id'
    ];

    public function Transportation_area()
    {
        return $this->belongsTo('app\Setting\Transportation\Transportation_area', 'id', 'transportation_area_id');
    }
}
