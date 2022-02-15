<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Movie extends Model
{
    protected $guarded= [];
    protected $primaryKey = 'id';

    //protected $table = 'movies';
    public static function find($title)
    {

        return Movie::all()->where(Movie.$title,$title);

    }
    public function cast(){
        return $this->hasMany(Cast::class);
    }
    public function category(){
        return $this->hasOne(Category::class);
    }
}
