<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    private static $employee;
    use HasFactory;

    public static function saveEmployee($request)
    {
        self::$employee = new Employee();
        self::$employee->employee_name = $request->employee_name;
        self::$employee->employee_phone = $request->employee_phone;
        self::$employee->employee_email = $request->employee_email;
        self::$employee->employee_registration_number = $request->employee_registration_number;
        self::$employee->password = bcrypt($request->password);
        self::$employee->save();
    }

}
