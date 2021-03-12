<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $table='student_mother';
    protected $fillable = ['student_id', 'name', 'birth_date', 'is_alive', 'education','job', 'phone','status_id'];

    public function scopeActive($query)
    {
        return $query->where('status_id',true);
    }
}
