<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public $employee;

    public function addEmployee()
    {
        return view('admin.employee.add-employee',['batches'=> Batch::all()]);
    }

    public function saveEmployee(Request $request)
    {
        if ($request->batch_id != null && $request->employee_name != null && $request->employee_phone != null && $request->employee_email != null && $request->employee_registration_number != null && $request->password != null) {
            Employee::saveEmployee($request);
            return back()->with('success', 'Successfully Added');
        } else {
            return back()->with('warning', 'Please Enter Data');
        }
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
        return back()->with('success','Successfully Deleted');;
    }
}
