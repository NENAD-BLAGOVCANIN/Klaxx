<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class SearchController extends Controller
{
    public function results(Request $request)
    {

        $query = $request->input('s');
        $listings = Listing::where('title', 'like', '%' . $query . '%')->take(10)->get();

        return view('search.results', compact('listings', 'query'));
    }
}
