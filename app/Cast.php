<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = 'cast';

    public function actor(){
        return $this->hasMany(Actor::class);
    }
}
