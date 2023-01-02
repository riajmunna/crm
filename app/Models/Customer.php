<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $employee;

    public static function saveCustomer($request)
    {
        self::$employee = new Customer();
        self::$employee->customer_name = $request->customer_name;
        self::$employee->customer_phone = $request->customer_phone;
        self::$employee->customer_email = $request->customer_email;
        self::$employee->customer_address = $request->customer_address;
        self::$employee->customer_facebook_link = $request->customer_facebook_link;
        self::$employee->save();
    }

}
