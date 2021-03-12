<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'grade_id', 'subject_order', 'subject_type_id',
    ];

    public function Subject_type()
    {
        return $this->hasOne('app\Setting\General\Subject_type', 'id');
    }

    public function Grade()
    {
        return $this->hasOne('app\Setting\General\Grade', 'id');
    }
}
