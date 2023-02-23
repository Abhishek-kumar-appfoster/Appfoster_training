<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Project;




class EmployeeProjectsController extends Controller
{
    public function index($id)
    {
        $employee = Employee::find($id);       
        $projects = $employee->projects;
        return response()->json($projects);
        
    }

    public function store(Request $request,$employee_id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable', 
        ]);
        $project = new Project($validatedData);
        $project->employee_id = $employee_id;
        $project->save();
        return response()->json($project, 201);
    }

    public function update(Request $request, $employeeId, $projectId)
{
    $project = Project::where('employee_id', $employeeId)
                      ->where('id', $projectId)
                      ->first();
    if ($project) {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $project->update($validatedData);

        return response()->json($project);
    } else {
        return response()->json('Project not found for this employee', 404);
    }
}
public function destroy($employeeId, $projectId)
{
    $project = Project::where('employee_id', $employeeId)
                      ->where('id', $projectId)
                      ->first();
    if ($project) {
        $project->delete();

        return response()->json('Project deleted');
    } else {
        return response()->json('Project not found for this employee', 404);
    }
}
}
