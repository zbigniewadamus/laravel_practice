<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    public function movie()
    {
        return $this->hasOne(Category::class);
    }
    public function loan(){
        return $this->hasOne(Copy::class);
    }
}
