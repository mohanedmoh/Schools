<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;


class Transportation_area extends Model
{
    protected $fillable = [
        'area_name', 'transportation_line_id', 'status_id'
    ];

    public function Transportation_line()
    {
        return $this->hasOne('app\Setting\Transportation\Transportation_line', 'id', 'transportation_line_id');
    }

    public function Driver()
    {
        return $this->belongsTo('app\Setting\Transportation\Driver');
    }

    public function Area_price()
    {
        return $this->hasMany('App\Setting\Transportation\Area_price');
    }
}
