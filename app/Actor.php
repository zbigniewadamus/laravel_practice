<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function cast(){
        return $this->hasMany(Cast::class);
    }
    public function movie(){
        return $this->hasMany(Movie.cast());
    }
}
