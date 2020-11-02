<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $type = new Type;

      app()->setLocale('en');

      $type->title = 'Plain';
      $type->slug = 'plain';
      $type->image = 'Noimage.jpg';
      $type->description = '';
      $type->save();
      //------------------------

      $type = new Type;

      app()->setLocale('en');

      $type->title = 'Premium Quality';
      $type->slug = 'premium-quality';
      $type->image = 'premium-quality-products.png';
      $type->description = '';
      $type->save();
      //-------------------------------

      $type = new Type;

      app()->setLocale('en');

      $type->title = 'Bio Products';
      $type->slug = 'bioproducts';
      $type->image = 'bio-products.png';
      $type->description = '';
      $type->save();

    }
}
