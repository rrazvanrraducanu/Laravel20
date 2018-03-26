<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = 'flowers';
    public static $rules=[
        'nume'=>'required',
        'culoare'=>'required',
        'marime'=>'required',
        'pret'=>'required'
    ];

}
