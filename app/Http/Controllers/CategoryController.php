<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category_id)
    {
        $category = Category::with('subcategories')->where('id', '=', $category_id)->get();

        return view('categories.show', compact('category'));
    }
}
