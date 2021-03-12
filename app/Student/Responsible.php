<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    protected $connection = 'conn';
    protected $table='pupil_responsible';
    protected $fillable = [
         'name', 'relation', 'address', 'phone', 'mobile','em_phone',
        'em_phone_name', 'em_phone_second','em_phone_name_second','status_id'
    ];
    public function scopeActive($query)
    {
        return $query->where('status_id',true);
    }
    public function getConn(){return $this->connection;}
}
