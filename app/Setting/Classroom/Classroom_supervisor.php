<?php

namespace App\Setting\Classroom;

use Illuminate\Database\Eloquent\Model;

class Classroom_supervisor extends Model
{
    protected $table = 'classroom_supervisors';
    protected $fillable = [
        'classroom_id', 'employee_id', 'study_year_id'
    ];

    public function Classroom()
    {
        return $this->hasOne('App\Setting\Classroom\Classroom', 'id', 'classroom_id');
    }

    public function Employee()
    {
        return $this->hasOne('App\Setting\Employee\Employee', 'id', 'employee_id');
    }

    public function Study_year()
    {
        return $this->hasOne('App\Setting\General\Study_year', 'id', 'study_year_id');
    }


}

