<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Movie extends Model
{
    protected $guarded= [];
    protected $primaryKey = 'id';


    public function cast():hasMany
    {
        return $this->hasMany(Cast::class);
    }
    public function category():belongsto{
        return $this->belongsTo(Category::class);
    }
    public function copy(){
        return $this->hasMany(Copy::class);
    }
}
