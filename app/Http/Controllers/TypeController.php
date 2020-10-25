<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use Illuminate\Http\Request;

class TypeController extends Controller
{


    public function index()
    {
        return view('categories.index');
    }

    public function show($slug)
    {
      $cat = Category::with('products')->where('slug', $slug)->first();

        return view('categories.show', compact('cat'));
    }


}
