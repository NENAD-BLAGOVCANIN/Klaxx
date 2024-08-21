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

        $listings = Listing::where(function ($q) use ($query) {
            $q->where('title', 'like', '%' . $query . '%')
                ->orWhere('keywords', 'like', '%' . $query . '%');
        })
        ->where('status', '=', Listing::STATUS_ACTIVE)
        ->take(10)->get();

        return view('search.results', compact('listings', 'query'));
    }

}
