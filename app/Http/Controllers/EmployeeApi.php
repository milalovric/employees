<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeApi extends Controller
{
    public function index()
    {
        $employee = Employee::all();


        return response()->json($employee);
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Birthday' => 'required',

        ]);
        $employee=Employee::create($request->post());


        return "Employee stvoren";
    }

    public function show($id)
    {

        $employee = Employee::find($id);
        return $employee;
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Birthday' => 'required',
        ]);

        $employee->update($request->all());
        $employee->save();

        return $employee;
    }
    
    public function destroy($id)
    {
        $employee=Employee::find($id)->delete();
        return "Employee deleted";
    }
}