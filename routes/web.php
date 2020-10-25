<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::get('/', function () {
    return view('home');
});


  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
  })->name('dashboard');


  Route::middleware('auth')->prefix('admin')->group(function () {

    Route::resource('pages', PageController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);

  });


  /*
  * Routes that serve the frontend and what the end user sees
  */
  // keep it rsourcefull for now, it just works

  Route::resource('food', 'FoodController',
                ['only' => ['index', 'show']]);

  Route::get('premium-quality-products', PremiumController::class);
  //
  Route::get('bioproduct', BioProductController::class);

  Route::resource('product-types', 'TypeController',
                ['only' => ['index', 'show']]);

  // Route::get('type', 'TypeController',
  //               ['only' => ['premium', 'bioproduct']]);



// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
