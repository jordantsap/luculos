<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
class FoodController extends Controller
{

    public function index()
    {
        $food = DB::table('products')->where('type_id', 1)->get();
        $cats = DB::table('categories')->where('type_id', 1)->get();
        return view('products.index', compact('cats', 'food'));
    }

    public function show(Product $product)
    {
        return view('products.show');
    }

}
