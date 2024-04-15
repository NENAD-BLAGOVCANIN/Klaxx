<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Listing;
use Baum\Node;

class CategoryController extends Controller
{
    public function show(Request $request, $category_id)
    {

        $category = Category::findOrFail($category_id);

        $categoryIds = $this->getCategoryAndDescendantsIds($category);

        $listings = Listing::whereIn('category_id', $categoryIds)->get();
    
        return view('categories.show', compact('listings'));
    }
    
    protected function getCategoryAndDescendantsIds($category)
    {
        $categoryIds = [$category->id];
    
        if ($category->subcategories) {
            foreach ($category->subcategories as $child) {
                $categoryIds = array_merge($categoryIds, $this->getCategoryAndDescendantsIds($child));
            }
        }
    
        return $categoryIds;
    }
    
}
