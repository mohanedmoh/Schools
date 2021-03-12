<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Study_year extends Model
{
    protected $fillable = [
        'name', 'from_date', 'to_date', 'status_id'
    ];

    public function Status()
    {
        return $this->hasOne('App\Setting\General\Status', 'id', 'status_id');
    }

    public function Classroom_supervisor()
    {
        return $this->belongsTo('App\Setting\Classroom\Classroom_supervisor');
    }

    public function Class_fee()
    {
        return $this->belongsTo('App\Class_fee');
    }
}
