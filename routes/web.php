<?php

use Illuminate\Support\Facades\Route;
// use Request;
Route::redirect('admin', 'admin/dashboard');
Route::prefix('admin')->group(function () {

  Auth::routes(['register' => false]);

  Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');

});

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('homepage');


Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::get('types/{type?}', [App\Http\Controllers\TypeController::class, 'type'])->name('type');
//below route not needd after changed above route name and delete the function in controller which holds the below endpoint
// Route::get('type/{type}', [App\Http\Controllers\TypeController::class, 'premium'])->name('types.premium');

Route::view('news', 'news.index')->name('news');


Route::get('pricelist', PriceListController::class, 'getpricelist')->name('getpricelist');
Route::post('pricelist', PriceListController::class, 'postpricelist')->name('postpricelist');


Route::get('contact', ContactController::class, 'getcontact')->name('getcontact');
Route::post('contact', ContactController::class, 'postcontact')->name('postcontact');

Route::view('our-vision', 'our-vision')->name('our-vision');
