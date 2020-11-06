<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    public function getUsernameAttribute($value)
    {
        return ucfirst($value);
    }
    
}
