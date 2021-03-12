<?php

namespace App\Setting\General;

use Illuminate\Database\Eloquent\Model;

class Fees_type extends Model
{
    protected $fillable = [
        'type', 'fees_cat_id'
    ];

    public function Fees_cat()
    {
        return $this->hasOne('App\Setting\General\Fees_cat', 'id', 'fees_cat_id');
    }

    public function Class_fee()
    {
        return $this->belongsTo('App\Setting\General\Class_fee');
    }
}
