<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author(){
        $author = new Author();
        $author->username = 'rohit';
        $author->password = 'rohit12';

        $author->save();

    }

    // Get Author based on Post ID

    public function show_author($id){
        $author = Post::find($id)->author;
        return $author;
    }
}
