<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    public function employees()
    {
        return $this->belongsToMany(employees::class);
    }
}
