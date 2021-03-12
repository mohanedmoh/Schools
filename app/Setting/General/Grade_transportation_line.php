<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Grade_transportation_line extends Model
{
    protected $table = "grade_transportation_line";

    protected $fillable = [
        'grade_id', 'transportation_line_id'
    ];

    public function grade_transportation_line()
    {
        return $this->belongsToMany('App\Setting\General\Grade', 'id', 'grade_id', 'transportation_line_id');
    }
}
