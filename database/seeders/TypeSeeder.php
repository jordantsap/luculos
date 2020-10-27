<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
      'title' => 'Premium Quality',
      'slug' => 'premium-quality',
      'description' => '',
      'image' => 'premium.png',
    ]);

    DB::table('types')->insert([
        'title' => 'Bio Products',
        'slug' => 'bioproductS',
        'description' => '',
        'image' => 'bio.png',
    ]);
    }
}
