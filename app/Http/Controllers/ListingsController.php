<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingImage;
use App\Models\Category;
use App\Models\CategoryAttribute;
use App\Models\ListingAttribute;

class ListingsController extends Controller
{

    public function view(Request $request, $listing_id)
    {

        $listing = Listing::findOrFail($listing_id);

        $listing = Listing::findOrFail($listing_id);
        $category_id = $listing->category_id;

        $category = Category::findOrFail($category_id);


        $listingAttributes = ListingAttribute::where('listing_id', $listing_id)
            ->with('attribute')
            ->get();


        return view('listings.view', compact('listing', 'listingAttributes'));
    }

    public function myListings(Request $request)
    {

        $active_listings = Listing::where('user_id', auth()->user()->id)->where('status', '=', Listing::STATUS_ACTIVE)->get();
        $pending_listings = Listing::where('user_id', auth()->user()->id)->where('status', '=', Listing::STATUS_PENDING_APPROVAL)->get();
        $expired_listings = Listing::where('user_id', auth()->user()->id)->where('status', '=', Listing::STATUS_EXPIRED)->get();
        $denied_listings = Listing::where('user_id', auth()->user()->id)->where('status', '=', Listing::STATUS_DENIED)->get();
        $draft_listings = Listing::where('user_id', auth()->user()->id)->where('status', '=', Listing::STATUS_DRAFT)->get();

        return view('listings.myListings', compact('active_listings', 'pending_listings', 'expired_listings', 'denied_listings', 'draft_listings'));
    }
    public function create(Request $request)
    {

        if ($request->method() == "POST") {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'price' => 'required|numeric',
                'keywords' => 'nullable|string',
                'category_id' => 'required|exists:categories,id',
            ]);

            $listing = new Listing();
            $listing->title = $validatedData['title'];
            $listing->price = $validatedData['price'];
            $listing->keywords = $validatedData['keywords'];
            $listing->user_id = auth()->user()->id;
            $listing->category_id = $validatedData['category_id'];

            $listing->save();

            return redirect("/listings/" . $listing->id . "/attributes");
        }


        return view('listings.create');
    }

    public function updateAttributes(Request $request, $listing_id)
    {

        $listing = Listing::findOrFail($listing_id);
        $category_id = $listing->category_id;

        $category = Category::findOrFail($category_id);


        $categoryAttributes = CategoryAttribute::where('category_id', $category_id)->get();

        if ($category->parent) {
            $parentCategoryAttributes = CategoryAttribute::where('category_id', $category->parent->id)->get();
            $categoryAttributes = $categoryAttributes->merge($parentCategoryAttributes);
        }


        if ($request->method() == "POST") {
            foreach ($categoryAttributes as $attribute) {

                $inputName = 'attribute_' . $attribute->attribute->id;
                $value = $request->input($inputName);

                $listingAttribute = new ListingAttribute();
                $listingAttribute->listing_id = $listing_id;
                $listingAttribute->attribute_id = $attribute->attribute->id;
                $listingAttribute->value = $value;
                $listingAttribute->save();
            }
            return redirect("/listings/" . $listing->id . "/description");
        }

        return view('listings.updateAttributes', compact('categoryAttributes', 'listing'));
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

    public function updateImages(Request $request, $listing_id)
    {

        if ($request->method() == "POST") {

            try {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Maximum file size is set to 2MB
                ]);

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $path = $image->store('listing_images', 'public');
            
                    $storagePath = str_replace('public', '', $path);
            
                    ListingImage::create([
                        'image_path' => '/storage/' . $storagePath,
                        'listing_id' => $listing_id,
                    ]);
                }
            } catch (\Throwable $th) {
               dd($th->getMessage());
            }


            return redirect()->back()->with('success', 'Image uploaded successfully');

        }

        $listing = Listing::findOrFail($listing_id);
        $existingImages = $listing->images;

        return view('listings.updateImages', compact('existingImages', 'listing_id'));
    }

    public function publish(Request $request, $listing_id)
    {
        $listing = Listing::findOrFail($listing_id);
        $listing->status = Listing::STATUS_PENDING_APPROVAL;
        $listing->save();

        return redirect('/my-listings')->with('success', 'Successfully published your listing!');

    }

    public function renewListing(Request $request, $id){
        $listing = Listing::findOrFail($id);
        $listing->status = Listing::STATUS_ACTIVE;
        $listing->save();

        return redirect()->back()->with('success', 'Successfully renewed your listing!');

    }

}
