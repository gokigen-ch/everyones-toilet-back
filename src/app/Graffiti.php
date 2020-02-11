<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graffiti extends Model
{
    protected $fillable =[
        'text','position_x','position_y','room'
    ];
}
