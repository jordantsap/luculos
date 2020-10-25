<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
class BioProductController extends Controller
{
  public function __invoke()
  {
    $type = Type::with('products')->where('slug', 'bioproduct')->first();

      return view('types.bio', compact('type'));
  }
}
