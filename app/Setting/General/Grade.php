<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'grade' ,'status_id'
    ];

    public function Classroom()
    {
        return $this->belongsTo('app\Setting\Classroom\Classroom');
    }

    public function Transportation_line()
    {
        return $this->belongsToMany('App\Setting\Transportation\Transportation_line');
    }

    public function Class_fee()
    {
        return $this->belongsTo('App\Setting\Classroom\Class_fee');
    }

    public function Subject()
    {
        return $this->belongsTo('app\Setting\General\Subject');
    }

    public function scopeActive($query)
    {
        return $query->where('status_id', true);
    }
}

