<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Project extends Model
{
    use HasFactory;
    public function language(){ // model name aur function k nam same hoga
        return $this->hasMany(Language::class);
    }

    public function deployment(){
        return $this->hasManyThrough(Deployment::class, Language::class);
    }
}
