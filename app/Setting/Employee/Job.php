<?php

namespace App\Setting\Employee;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['job_title'];

    public function Employee()
    {
        return $this->belongsTo('app\Setting\Employee\Employee');
    }
}
