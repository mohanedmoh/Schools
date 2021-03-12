<?php

namespace App\Setting\Employee;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'address', 'b_date', 'phone', 'discipline', 'gender', 'marital_status_id'
        , 'qualification_id', 'specialized_subjects', 'job_id', 'status_id'
    ];

    public function marital_status()
    {
        return $this->hasOne('app\Setting\Employee\Marital_status');
    }

    public function job()
    {
        return $this->hasOne('app\Setting\Employee\Job', 'id');
    }

    public function status()
    {
        return $this->hasOne('app\Setting\General\Status');
    }

    public function Classroom_supervisor()
    {
        return $this->belongsTo('App\Setting\Classroom\Classroom_supervisor');
    }

    public function qualification()
    {
        return $this->hasOne('app\Setting\Employee\Qualification');
    }

    public function Classroom()
    {
        return $this->belongsToMany('App\Setting\Classroom\Classroom', 'id');
    }


}
