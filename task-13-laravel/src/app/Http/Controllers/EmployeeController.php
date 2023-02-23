<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function show($id){
        $employee = Employee::find($id);
        if($employee){
            return response()->json(($employee));
        }else{
            return response()->json('Employee not found',404);
        }
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'address'=> 'required',
        ]);

        $employee = Employee::create($validatedData);

        return response()->json($employee, 201);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'address'=> 'required',
            ]);

            $employee->update($validatedData);

            return response()->json($employee);
        } else {
            return response()->json('Employee not found', 404);
        }
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();

            return response()->json('Employee deleted');
        } else {
            return response()->json('Employee not found', 404);
        }
    }
}
