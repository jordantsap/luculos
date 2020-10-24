<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


  Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
      return view('dashboard');
  })->name('dashboard');

Route::prefix('admin')->group(function () {

  Route::resource('pages', PageController::class);
  Route::resource('products', ProductController::class);
  Route::resource('categories', CategoryController::class);

});

/*
* Routes that serve the frontend and what the end user sees
*/

Route::get('products', [FrontPageController::class, 'productsIndex']);

Route::get('products/{product}', [FrontPageController::class, 'productShow']);

Route::get('categories', [FrontPageController::class, 'categoriesIndex']);

Route::get('category/{category}', [FrontPageController::class, 'categoryShow']);
