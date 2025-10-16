<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ability extends Model
{

    use HasFactory;

    //protected $table = 'Abilities';
    //protected $primarykey = '';
    protected $fillable = ['descripcion'];
    protected $allowfilter = ['id', 'descripcion'];
    protected $allowincluded = ['employees'];
 
    public function employees()
    {
        return $this->belongsToMany(employee::class,'abilities_employees');
    }
}
