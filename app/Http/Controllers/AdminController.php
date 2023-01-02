<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $employee;
    public function adminDashboard()
    {
        return view('admin.dashboard.dashboard',[
            'admin' => User::all()->first(),
        ]);
    }

    public function addEmployee()
    {
        return view('admin.employee.add-employee');
    }

    public function saveEmployee(Request $request)
    {
        Employee::saveEmployee($request);
        return back();
    }

    public function manageEmployee()
    {
        return view('admin.employee.manage-employee',[
            'employees' => Employee::all(),
        ]);
    }

    public function deleteEmployee(Request $request)
    {
        $this->employee = Employee::find($request->employee_id);
        $this->employee->delete();
        return back();
    }

}
