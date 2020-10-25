<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('types')->insert([
          'title' => 'Plain',
          'slug' => 'plain',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('types')->insert([
        'title' => 'Premium',
        'slug' => 'premium',
        'description' => '',
        'image' => 'premium.png',
      ]);

      DB::table('types')->insert([
          'title' => 'Bioproduct',
          'slug' => 'bioproduct',
          'description' => '',
          'image' => 'bio.png',
      ]);

    }
}
