<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $table='student_health_record';
    protected $fillable = ['student_id','health_status','blood_family_id','diseases','status'];

}