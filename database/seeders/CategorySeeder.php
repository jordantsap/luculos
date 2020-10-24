<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          'title' => 'Wine',
          'slug' => 'wine',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Wine',
          'slug' => 'bio-wine',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Olive Oil',
          'slug' => 'olive-oil',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Sauses',
          'slug' => 'sauses',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Greek Pasta',
          'slug' => 'greek-pasta',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Diary',
          'slug' => 'diary',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);
      // stopped here
      DB::table('categories')->insert([
          'title' => 'Olives',
          'slug' => 'olives',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Honey',
          'slug' => 'honey',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Diary',
          'slug' => 'bio-diary',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Olive Oil',
          'slug' => 'bio-olive-oil',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Olives',
          'slug' => 'bio-olives',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Honey',
          'slug' => 'bio-honey',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Greek Pasta',
          'slug' => 'bio-greek-pasta',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Bio Sauses',
          'slug' => 'bio-sauses',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Olive Oil',
          'slug' => 'premium-olive-oil',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Diary',
          'slug' => 'premium-diary',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Olives',
          'slug' => 'premium-olives',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Honey',
          'slug' => 'premium-honey',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Wine',
          'slug' => 'premium-wine',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Sauses',
          'slug' => 'premium-sauses',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);

      DB::table('categories')->insert([
          'title' => 'Premium Greek Pasta',
          'slug' => 'premium-greek-pasta',
          'description' => '',
          'image' => 'Noimage.jpg',
      ]);
    }
}
