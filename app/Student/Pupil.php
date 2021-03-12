<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    protected $connection = 'conn';
    //protected $table='students';
    protected $fillable = [
            'student_no', 'student_name', 'address', 'phone', 'mobile','birth_date',
            'transportation_type_id', 'area_id','is_transferred','reason_of_leaving',
            'study_year', 'responsible_id', 'school_id','branch_id','status_id'
    ];
    public function scopeActive($query)
    {
        return $query->where('status_id',true);
    }
}
