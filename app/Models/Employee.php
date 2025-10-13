<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function sons()
    {
        return $this->hasMany(sons::class);
    }

    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function centers()
    {
        return $this->hasMany(centers::class);
    }

    public function abilities()
    {
        return $this->belongsToMany(abilities::class);
    }
}
