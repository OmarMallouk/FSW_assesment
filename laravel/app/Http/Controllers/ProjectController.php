<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller{

    function get_Projects(){
        $project = Project::where('user_id', auth()->id())->get();

        return response()->json([
            "projects"=> $project
        ]);
    }

    public function get_ProjectId(){
        $userId = auth()->id();

        $project = Project::with('user')  
            ->where('user_id', $userId) 
            ->get();

        return response()->json([
            "projects" => $project
        ]);
    }

    public function save(Request $request)
    {  
        
        $project = Project::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' =>$request->language,
            
        ]);

        return response()->json([
            'message' => 'File created successfully!',
            'file' => $project
        ], 201);
    }

}
