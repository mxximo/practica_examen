<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Center extends Model
{

    use HasFactory;

   // protected $table = 'centers';
    //protected $primarykey = '';
    protected $fillable = ['nombre','poblacion','direccion'];
    protected $allowfilter = ['id', 'nombre','poblacion','direccion','employee_id'];
    protected $allowincluded = ['departments','employee'];


     public function departments()
    {
        return $this->hasMany(department::class);
    }

    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
