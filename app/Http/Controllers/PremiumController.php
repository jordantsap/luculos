<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;


class PremiumController extends Controller
{
  public function __invoke()
  {
    $type = Type::with('products')->where('slug', 'premium')->first();

      return view('types.premium', compact('type'));
  }
}
