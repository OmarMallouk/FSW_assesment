<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\UserProject;

class UserProjectController extends Controller{
    function get_AllProjects(){

        $userId = auth()->id();
        $projects = UserProject::with(['user', 'project'])
        ->where('user_id', $userId) 
        ->get();

        
        return response()->json([
            "projects"=> $projects
        ]);
    }

}
