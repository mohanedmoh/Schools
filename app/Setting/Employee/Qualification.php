<?php

namespace App\Setting\Employee;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{

    protected $fillable = ['qualification'];

    public function Employee()
    {
        return $this->belongsTo('App\Setting\Employee\Employee');
    }
}
