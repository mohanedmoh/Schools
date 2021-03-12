<?php

namespace App\Setting\Employee;

use Illuminate\Database\Eloquent\Model;


class Marital_status extends Model
{
    protected $fillable = ['marital_status'];

    public function Employee()
    {
        return $this->belongsTo('App\Setting\Employee\Employee');
    }
}

