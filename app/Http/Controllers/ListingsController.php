<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function myListings(Request $request){
        return view('myListings');
    }
}
