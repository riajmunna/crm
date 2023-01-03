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

        if ($request->customer_name != null && $request->customer_phone != null && $request->customer_email != null && $request->customer_address != null) {

            if(Customer::where('customer_phone','=',$request->customer_phone)->exists()){
                return back()->with('warning', 'This phone is already taken..');
            }

            if(Customer::where('customer_email','=',$request->customer_email)->exists()){
                return back()->with('warning', 'This email is already taken..');
            }

            if(Customer::where('customer_facebook_link','=',$request->customer_facebook_link)->exists()){
                return back()->with('warning', 'This facebook is already taken..');
            }
            else{
                Customer::saveCustomer($request);
                return back()->with('success', 'Successfully Added');
            }

        }

        else {
            return back()->with('warning', 'Please Enter Data');
        }
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
