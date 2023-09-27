<?php

namespace App\Http\Controllers;

use App\Models\Deployment;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class DeploymentController extends Controller
{
    public function add_deployment($id)
    {
        $language = Language::find($id);
        $deployment = new Deployment();
        $deployment->work = 'pending';
        $language->deployment()->save($deployment);
        return $deployment;
    }

    // Get Deployment based on Project ID
    public function show_deployment($id)
    {
        // AS IT HAS TWO WAYS
        // 1. hasMany
        // flatMap ->for getting multiple result(row). without it error for one also?
        $deployment = Project::find($id)->language->flatMap->deployment; 

        // 2. hasManyThrough
        $deployment = Project::find($id)->deployment; 
        return $deployment;
    }
}
