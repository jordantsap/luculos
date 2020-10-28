<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Type;

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
    }
}
