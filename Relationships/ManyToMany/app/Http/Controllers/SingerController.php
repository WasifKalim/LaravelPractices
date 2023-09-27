<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer(){
        $singer = new Singer();
        $singer->name= "King Kong";
        $singer->save();


        $songids = [1, 3, 5]; // it is songs id
        $singer->songs()->attach(($songids));
    }

    // Get singer based on Song ID
    public function show_singer($id){
        $singer = Song::find($id)->singers;
        return $singer;
    }


}
