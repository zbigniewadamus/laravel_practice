<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'categories';

    public function movie(){
        return $this->belongsToMany(Movie::class);
    }
}
