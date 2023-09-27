<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    public function car(){
        // costly for large data
        return $this->hasOne(Car::class);
    }
    public function owner(){
        // less costly for large data
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
