<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = 'cast';

    public function actor(){
        return $this->hasMany('App\Actor');
    }

    public function movie(){
        return $this->hasMany('App\Movie');
    }
}
