<?php

namespace App\Setting\Classroom;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'classroom_name', 'grade_id', 'status_id'
    ];

    public function Grade()
    {
        return $this->hasOne('app\Setting\General\Grade', 'id');
    }

    public function Classroom_supervisor()
    {
        return $this->belongsTo('App\Setting\Classroom\Classroom_supervisor');
    }

    public function scopeActive($query)
    {
        return $query->where('status_id', true);
    }


}
