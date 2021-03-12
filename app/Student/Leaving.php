<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Leaving extends Model
{
    protected $table='left_student';
    protected $fillable = ['student_id','left_reason_id','left_date','comments','status'];

}