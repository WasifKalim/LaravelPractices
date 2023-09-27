<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song(){
        $song = new Song();
        $song->title = 'Aaj k';
        $song->save();
    }

    // Get Song Based on Singer ID
    public function show_song($id){
        $song= Singer::find($id)->songs;
        return $song;
    }
}
