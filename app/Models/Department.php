<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function employees()
    {
        return $this->hasMany(employees::class);
    }

    public function center()
    {
        return $this->belongsTo(center::class);
    }
}
