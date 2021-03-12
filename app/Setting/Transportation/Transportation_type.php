<?php

namespace App\Setting\Transportation;

use Illuminate\Database\Eloquent\Model;

class Transportation_type extends Model
{
    protected $fillable = ['title'];

    public function scopeActive($query)
    {
        return $query->where('status_id', true);
    }
}
