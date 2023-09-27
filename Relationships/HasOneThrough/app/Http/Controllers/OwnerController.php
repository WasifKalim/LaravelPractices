<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function add_owner($id){
        $car = Car::find($id);
        $owner = new Owner();
        $owner->name = 'Sonam Kapoor';
        $car->owner()->save($owner);
    }

    // Get Owner based on Mechanic Id
    public function show_owner($id){
        // do tarike hn
        // 1. hasOne
        $owner = Mechanic::find($id)->car->owner; // higher cost
        
        // 2. hasOnethrough
        // $owner = Mechanic::find($id)->owner; // lower 
        return $owner;  

    }
}
