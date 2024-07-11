<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        if (!auth()->user()->role == "admin") {
            return abort(403, 'Access Denied');
        }

        return view('admin.dashboard');
    }

    public function users()
    {

        if (!auth()->user()->role == "admin") {
            return abort(403, 'Access Denied');
        }

        return view('admin.users');
    }
}
