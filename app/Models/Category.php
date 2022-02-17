<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $primaryKey = 'id_category';
    protected $table = 'categories';

    public function movie(){
        return $this->hasMany(Movie::class);
    }
}
