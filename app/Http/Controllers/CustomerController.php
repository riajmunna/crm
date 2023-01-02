<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /* Customer */

    public $customer;
    public function addCustomer()
    {
        return view('admin.customer.add-customer');
    }

    public function saveCustomer(Request $request)
    {
        Customer::saveCustomer($request);
        return back()->with('success','Successfully Added');;
    }

    public function manageCustomer()
    {
        return view('admin.customer.manage-customer',[
            'customers' => Customer::all(),
        ]);
    }
    public function deleteCustomer($id)
    {
        $this->customer = Customer::find($id);
        $this->customer->delete();
        return back()->with('success','Successfully Deleted');;
    }
}
