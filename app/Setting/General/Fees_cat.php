<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Fees_cat extends Model
{
    protected $table = 'fees_cats';
    protected $fillable = [
        'name'
    ];

    public function Fees_type()
    {
        return $this->belongsTo('App\Setting\General\Fees_type');
    }
}

