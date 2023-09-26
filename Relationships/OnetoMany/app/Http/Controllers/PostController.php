<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add_post($id) {
        $author = Author::find($id);
        $post = new Post();
        $post->title = 'Title 3';
        $post->cat = 'Cat - 3';

        $author->post()->save($post);
    }

    // Get Post based on Author ID
    public function show_post($id){
        $post = Author::find($id)->post;
        return $post;
    }
}
