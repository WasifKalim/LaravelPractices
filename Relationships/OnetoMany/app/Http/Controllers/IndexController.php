<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use PDO;

class IndexController extends Controller
{
    public function index($id){
        $author = Author::find($id);
        // var_dump($author->username);
        // var_dump($author->password);

        // dd($author->post);

        foreach($author->post as $post){
            // echo $post;
            echo $post->title;
            echo $post->cat;
        }
    }
}
