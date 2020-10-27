<?php

use Illuminate\Support\Facades\Route;

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('homepage');

Auth::routes(['register' => false]);

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');


Route::resource('products', ProductController::class);

Route::get('categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('types/{type}', [App\Http\Controllers\TypeController::class, 'bioproducts'])->name('types.bioproducts');
Route::get('type/{type}', [App\Http\Controllers\TypeController::class, 'premium'])->name('types.premium');
