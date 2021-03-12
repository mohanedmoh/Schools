<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name', 'phone', 'car_no', 'driver_license'
        , 'car_license', 'insurance_details', 'payment_type_id'
        , 'payment_amount', 'area_id', 'status_id', 'comments'
    ];

    public function payment_type()
    {
        return $this->hasOne('app\Setting\Transportation\Driver_payment_type', 'id');
    }

    public function Transportation_area()
    {
        return $this->hasOne('app\Setting\Transportation\Transportation_area', 'id');
    }

    public function status()
    {
        return $this->hasOne('app\Setting\General\Status', 'id');
    }
}
