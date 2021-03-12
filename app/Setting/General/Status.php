<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status'
    ];

    public function Driver()
    {
        return $this->belongsTo('app\Setting\Transportation\Driver');
    }

    public function Study_year()
    {
        return $this->belongsTo('App\Setting\General\Study_year');
    }

    public function Class_fee()
    {
        return $this->belongsTo('App\Classroom\Class_fee');
    }

    public function Branch()
    {
        return $this->belongsTo('App\Branch');
    }
}
