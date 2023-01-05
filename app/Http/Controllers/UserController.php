<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;

    public function addUser()
    {
        return view('admin.user.add-user', ['batches' => Batch::all()]);
    }

    public function saveUser(Request $request)
    {
        if ($request->name != null && $request->email != null && $request->password != null && $request->user_type != null) {

            if (User::where('email', $request->email)->exists()) {
                return back()->with('warning', 'This email is already taken..');
            } else {
                User::saveUser($request);
                return back()->with('success', 'Successfully Added');
            }

        } else {
            return back()->with('warning', 'Please Enter Data');
        }
    }

    public function manageUser()
    {
        return view('admin.user.manage-user', [
            'users' => User::all(),
        ]);
    }

    public function deleteUser(Request $request)
    {
        $this->user = User::find($request->user_id);
        $this->user->delete();
        return back()->with('success', 'Successfully Deleted');;
    }

    public function userProfile(Request $request)
    {
        $user = User::find($request->user_id);
        return view('admin.user.user-profile', [
            'user' => $user,
        ]);
    }

    public function editUser(Request $request)
    {
        User::editUser($request);
        return redirect(route('dashboard'));
    }
}
