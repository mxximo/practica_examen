<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Model
{

    use HasFactory;

    //protected $table = 'employees';
    //protected $primarykey = '';
    protected $fillable = ['telofono','num_hijos'];
    protected $allowfilter = ['id', 'telefono','num_hijos','department_id'];
    protected $allowincluded = ['sons','department','centers','abilities'];


    public function sons()
    {
        return $this->hasMany(son::class);
    }

    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function centers()
    {
        return $this->hasMany(center::class);
    }

    public function abilities()
    {
        return $this->belongsToMany(ability::class,'abilities_employees');
    }
}
