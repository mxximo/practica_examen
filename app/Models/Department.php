<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Department extends Model
{

     use HasFactory;

    //protected $table = 'departments';
    //protected $primarykey = '';
    protected $fillable = ['nombre','presupuesto'];
    protected $allowfilter = ['id', 'nombre','presupuesto','center_id'];
    protected $allowincluded = ['employees','center'];



    public function employees()
    {
        return $this->hasMany(employee::class);
    }

    public function center()
    {
        return $this->belongsTo(center::class);
    }
}
