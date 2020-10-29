<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new Product;

      app()->setLocale('en');

      $product->title = 'enProduct1';
      $product->slug = 'enproduct1';
      $product->image = 'Noimage.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 40;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('el');

      $product->title = 'elproduct1';
      $product->slug = 'elproion1';
      $product->image = 'Noimage.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 45;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('de');

      $product->title = 'deproduct1';
      $product->slug = 'deproduct1';
      $product->image = 'Noimage.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 56;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'ruproduct1';
      $product->slug = 'ruproduct1';
      $product->image = 'Noimage.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 67;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();
      //---------elproduct1---------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'enproduct2';
      $product->slug = 'enproduct2';
      $product->image = 'premium.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 77;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('el');

      $product->title = 'elproduct2';
      $product->slug = 'elproduct2';
      $product->image = 'premium.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 77;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('de');

      $product->title = 'deproduct2';
      $product->slug = 'deproduct2';
      $product->image = 'premium.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 50;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'ruproduct2';
      $product->slug = 'ruproduct2';
      $product->image = 'premium.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 46;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();
      //------------ruproduct2-------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'enproduct3';
      $product->slug = 'enproduct3';
      $product->image = 'bio.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('el');

      $product->title = 'elproduct3';
      $product->slug = 'elproduct3';
      $product->image = 'bio.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 56;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('de');

      $product->title = 'deproduct3';
      $product->slug = 'deproduct3';
      $product->image = 'bio.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 79;
      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'ruproduct3';
      $product->slug = 'ruproduct3';
      $product->image = 'bio.png';
      $product->box = 1;
      $product->palette = 50;
      $product->description = '';

      $product->category_id = 1;
      $product->type_id = 1;
      $product->save();

    }
}
