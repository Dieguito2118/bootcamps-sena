<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;

    //fillable permite realzar
    //insertar varias instancias al tiempo

    protected $fillable=['name' , 
                         'description',                          
                        'websibe',
                        'phone',
                        'user_id'  
    ]
                    ;
}
