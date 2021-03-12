<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Left extends Model
{
    protected $table='left_reason';
    protected $fillable = ['title','status_id'];

    public function scopeActive($query)
    {
        return $query->where('status_id',true);
    }
}