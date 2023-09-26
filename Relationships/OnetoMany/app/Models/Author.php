<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public function post(){
        // snake case -> underscore inbetween name
        // if we have to make other id then we have to pass is as second parameter
        return $this->hasMany(Post::class, 'author_id');
    }

}
