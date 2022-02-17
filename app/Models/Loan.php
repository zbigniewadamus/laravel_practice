<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function copy(){
        return $this->hasOne(Loan::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
