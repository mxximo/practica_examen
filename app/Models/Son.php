<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Son extends Model
{

    use HasFactory;

    //protected $table = 'sons';
    //protected $primarykey = '';
    protected $fillable = ['nombre','fecha_nac'];
    protected $allowfilter = ['id', 'nombre','fecha_nac','employee_id'];
    protected $allowincluded = ['employee'];



     public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
