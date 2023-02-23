<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::find($id);
        if ($project) {
            return response()->json($project);
        } else {
            return response()->json('Project not found', 404);
        }
    }

    public function store(Request $request,$employee_id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'employee_id'=>$employee_id,
        ]);

        $project = Project::create($validatedData);

        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        if ($project) {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'nullable',
                'employee_id'=>'required',
            ]);

            $project->update($validatedData);

            return response()->json($project);
        } else {
            return response()->json('Project not found', 404);
        }
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project) {
            $project->delete();

            return response()->json('Project deleted');
        } else {
            return response()->json('Project not found', 404);
        }
    }
}