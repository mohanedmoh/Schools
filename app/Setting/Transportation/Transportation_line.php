<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;

class Transportation_line extends Model
{
    protected $fillable = [
        'line_name', 'status_id'
    ];

    public function Grade()
    {
        return $this->belongsToMany('App\Setting\General\Grade');
    }

    public function Transportation_area()
    {
        return $this->belongsTo('App\Setting\Transportation\Transportation_area');
    }
    /*public function Grade_transportation_line(){
        return $this->hasOne('app\Grade_transportation_line','id');
    }*/
}

