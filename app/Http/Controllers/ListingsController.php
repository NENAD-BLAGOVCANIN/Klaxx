<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    public function myListings(Request $request)
    {

        $listings = Listing::where('user_id', auth()->user()->id)->get();

        return view('listings.myListings', compact('listings'));
    }
    public function create(Request $request)
    {

        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'price' => 'required|numeric',
                'category_id' => 'required|exists:categories,id',
            ]);

            $listing = new Listing();
            $listing->title = $validatedData['title'];
            $listing->price = $validatedData['price'];
            $listing->user_id = auth()->user()->id;
            $listing->category_id = $validatedData['category_id'];

            $listing->save();

            return redirect("/listings/" . $listing->id . "/description");
        }


        return view('listings.create');
    }

    public function updateDescription(Request $request, $listing_id)
    {

        if ($request->method() == "POST") {
            
            $listing = Listing::findOrFail($listing_id);
            $description = $request->get('description');
            $listing->description = $description;
            $listing->save();

            return redirect("/listings/" . $listing->id . "/images");


        }

        return view('listings.updateDescription');
    }

    public function updateImages(Request $request, $listing_id){
        return view('listings.updateImages');
    }

}
