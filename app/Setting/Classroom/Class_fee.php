<?php

namespace App\Setting\Classroom;

use Illuminate\Database\Eloquent\Model;

class Class_fee extends Model
{
    protected $table = 'class_fees';
    protected $fillable = [
        'fee_type_id', 'fee_value', 'grade_id', 'study_year_id', 'status_id'
    ];

    public function Fees_type()
    {
        return $this->hasOne('App\Setting\General\Fees_type', 'id', 'fee_type_id');
    }

    public function Grade()
    {
        return $this->hasOne('App\Setting\General\Grade', 'id', 'grade_id');
    }

    public function Study_year()
    {
        return $this->hasOne('App\Setting\General\Study_year', 'id', 'Study_year_id');
    }

    public function Status()
    {
        return $this->hasOne('App\Setting\General\Status', 'id', 'status_id');
    }
}

