<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listing;

class AdminController extends Controller
{
    public function dashboard()
    {

        if (auth()->user()->role != "admin") {
            return abort(403, 'Access Denied');
        }

        return view('admin.dashboard');
    }

    public function users()
    {

        if (auth()->user()->role != "admin") {
            return abort(403, 'Access Denied');
        }

        $usersCount = User::all()->count();
        $users = User::all();

        return view('admin.users', compact('usersCount', 'users'));
    }

    public function removeUser(Request $request)
    {

        $user_id = $request->get('user_id');
        $user = User::findOrFail($user_id);

        $user->delete();

        return redirect()->back()->with('success', 'User successfully removed');

    }

    public function setRole(Request $request)
    {

        $user_id = $request->get('user_id');

        $user = User::findOrFail($user_id);

        $role = $request->get('role');

        $user->role = $role;
        $user->save();


        return redirect()->back()->with('success', 'Successfully changed users role');

    }


    public function listings(Request $request){
        if (auth()->user()->role != "admin") {
            return abort(403, 'Access Denied');
        }

        $active_listings = Listing::where('status', '=', Listing::STATUS_ACTIVE)->get();
        $pending_approval_listings = Listing::where('status', '=', Listing::STATUS_PENDING_APPROVAL)->get();

        return view('admin.listings', compact('active_listings', 'pending_approval_listings'));

    }


}
