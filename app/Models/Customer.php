<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Customer extends Model
{
    use HasFactory;

    private static $customer;

    public static function saveCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->customer_name = $request->customer_name;
        self::$customer->customer_phone = $request->customer_phone;
        self::$customer->customer_email = $request->customer_email;
        self::$customer->customer_address = $request->customer_address;
        self::$customer->customer_facebook_link = $request->customer_facebook_link;
        self::$customer->created_by = Auth::user()->id;
        self::$customer->save();
    }

}
