<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index')->with('employees', $employees);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "empName" => "required |string | min: 3",
            "empSalary" => "required | numeric",
        ]);
        $newEmp = new Employee();
        $newEmp->name = $request->empName;
        $newEmp->salary = $request->empSalary;
        $newEmp->save();
        return redirect('/employees/list')->with('done', "Inserted Successfully");
    }

    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show')->with('employees', $employees);
    }

    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.update')->with('employees', $employees);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "empName" => "required |string | min: 3",
            "empSalary" => "required | numeric",
        ]);
        $newEmp = Employee::find($id);
        $newEmp->name = $request->empName;
        $newEmp->salary = $request->empSalary;
        $newEmp->save();
        return redirect('/employees/list')->with('done', "Updated Successfully");
    }

    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return redirect('/employees/list')->with('done', "Deleted Successfully");
    }
}
