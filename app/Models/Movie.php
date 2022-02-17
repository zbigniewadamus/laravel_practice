<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Movie extends Model
{
    protected $guarded= [];
    protected $primaryKey = 'id';


    public function cast(){
        return $this->hasMany(Cast::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function copy(){
        return $this->hasMany(Copies::class);
    }
}
