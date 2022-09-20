<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //fillable permite realzar
    //insertar varias instancias al tiempo
    
    protected $fillable=[ 'title' ,
                            'description' ,
                            'weeks' ,
                            'enroll_cost' ,
                            'minimum_skill' ,
                            'bootcamp_id'
    ] ;
}
