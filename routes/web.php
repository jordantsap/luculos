<?php

use Illuminate\Support\Facades\Route;

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('homepage');

Auth::routes(['register' => false]);

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');


Route::resource('products', ProductController::class);

Route::get('categories/{category?}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('types/{type?}', [App\Http\Controllers\TypeController::class, 'type'])->name('type');
//below route not needd after changed above route name and delete the function in controller which holds the below endpoint
// Route::get('type/{type}', [App\Http\Controllers\TypeController::class, 'premium'])->name('types.premium');

Route::view('news', 'news.index')->name('news');


Route::get('pricelist', PriceListController::class, 'getpricelist')->name('getpricelist');
Route::post('pricelist', PriceListController::class, 'postpricelist')->name('postpricelist');


Route::get('contact', ContactController::class, 'getcontact')->name('getcontact');
Route::post('contact', ContactController::class, 'postcontact')->name('postcontact');
