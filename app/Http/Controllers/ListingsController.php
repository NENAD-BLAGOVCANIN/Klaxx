<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    public function myListings(Request $request)
    {
        return view('listings.myListings');
    }
    public function create(Request $request)
    {

        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'price' => 'required|numeric',
                'description' => 'required',
            ]);

            $listing = new Listing();
            $listing->title = $validatedData['title'];
            $listing->price = $validatedData['price'];
            $listing->description = $validatedData['description'];
            $listing->user_id = auth()->user()->id;

            $listing->save();

            return redirect("/my-listings")->with('success', 'Listing created successfully.');
        }

        return view('listings.create');
    }

}
