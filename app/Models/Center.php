<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
     public function departments()
    {
        return $this->hasMany(departaments::class);
    }

    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
