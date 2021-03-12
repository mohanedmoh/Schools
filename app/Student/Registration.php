<?php


namespace App\Student;
use Illuminate\Database\Eloquent\Model;


class Registration extends Model
{
    protected $table='student_registration';
    protected $fillable = [
        'student_id', 'grade_id', 'classroom_id', 'registration_date',
        'registration_fee_id','is_new','discount_amount', 'status'
    ];

}