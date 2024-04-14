<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Listing;

class CategoryController extends Controller
{
    public function show(Category $category_id)
    {
        $listings = Listing::where('category_id', $category_id)->get();

        return view('categories.show', compact('listings'));
    }
}
