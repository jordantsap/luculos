<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Type;
use App\Models\Product;

class DataShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.header', function ($view) {

          $view->with('plains', Category::withTranslation()->where('type_id', 1)->get());

          $view->with('premiums', Category::withTranslation()->where('type_id', 2)->get());

          $view->with('bios', Category::withTranslation()->where('type_id', 3)->get());

          $view->with('types', Type::withTranslation()->get());

      });

        view()->composer('products.index', function ($view) {

          $view->with('cats', Category::where('type_id', 1)->get());

          $view->with('products', Product::where('type_id', 1)->paginate(12));

            // return view('products.index', compact('cats', 'products'));

      });
    }
}
