<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Subject_type extends Model
{
    protected $fillable = [
        'type'
    ];

    public function Subject()
    {
        return $this->belongsTo('app\Setting\General\Subject');
    }
}

