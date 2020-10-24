<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontPageController extends Controller
{

    public function productsIndex()
    {
        return view('products.index');
    }

    public function productShow(Product $product)
    {
        return view('products.show');
    }


    public function categoriesIndex()
    {
        return view('categories.index');
    }

    public function categoryShow(Category $category)
    {
        return view('categories.show');
    }


}
