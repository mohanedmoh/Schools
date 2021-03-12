<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;

class Driver_payment_type extends Model
{
    protected $fillable = [
        'type'
    ];

    public function Driver()
    {
        return $this->belongsTo('app\Setting\Transportation\Driver');
    }
}
