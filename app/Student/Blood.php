<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $table='blood_family';
    protected $fillable = ['title','status'];

    public function scopeActive($query)
    {
        return $query->where('status_id',true);
    }
}