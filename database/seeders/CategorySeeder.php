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
        'type_id' => 1,
        'description' => '',
        'image' => 'wine.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Wine',
        'slug' => 'bio-wine',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-wine.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Olive Oil',
        'slug' => 'olive-oil',
        'type_id' => 1,
        'description' => '',
        'image' => 'olive_oil__.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Sauses',
        'slug' => 'sauses',
        'type_id' => 1,
        'description' => '',
        'image' => 'sauces.png',
    ]);

    DB::table('categories')->insert([
        'title' => 'Greek Pasta',
        'slug' => 'greek-pasta',
        'type_id' => 1,
        'description' => '',
        'image' => 'greek-pasta.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Diary',
        'slug' => 'diary',
        'description' => '',
        'type_id' => 1,
        'image' => 'diary.jpg',
    ]);
    // stopped here
    DB::table('categories')->insert([
        'title' => 'Olives',
        'slug' => 'olives',
        'type_id' => 1,
        'description' => '',
        'image' => 'olives.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Honey',
        'slug' => 'honey',
        'type_id' => 1,
        'description' => '',
        'image' => 'honey.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Diary',
        'slug' => 'bio-diary',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-diary.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Olive Oil',
        'slug' => 'bio-olive-oil',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-olive_oil.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Olives',
        'slug' => 'bio-olives',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-olives.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Honey',
        'slug' => 'bio-honey',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-honey.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Greek Pasta',
        'slug' => 'bio-greek-pasta',
        'type_id' => 3,
        'description' => '',
        'image' => 'bio-greek-pasta.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Bio Sauses',
        'slug' => 'bio-sauses',
        'type_id' => 3,
        'description' => '',
        'image' => 'biosauses.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Olive Oil',
        'slug' => 'premium-olive-oil',
        'type_id' => 2,
        'description' => '',
        'image' => 'premiumoliveoil.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Diary',
        'slug' => 'premium-diary',
        'type_id' => 2,
        'description' => '',
        'image' => 'premium-diary.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Olives',
        'slug' => 'premium-olives',
        'type_id' => 2,
        'description' => '',
        'image' => 'premiumolives.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Honey',
        'slug' => 'premium-honey',
        'type_id' => 2,
        'description' => '',
        'image' => 'premium-honey.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Wine',
        'slug' => 'premium-wine',
        'type_id' => 2,
        'description' => '',
        'image' => 'premiumwine.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Sauses',
        'slug' => 'premium-sauses',
        'type_id' => 2,
        'description' => '',
        'image' => 'premiumsauses.jpg',
    ]);

    DB::table('categories')->insert([
        'title' => 'Premium Greek Pasta',
        'slug' => 'premium-greek-pasta',
        'type_id' => 2,
        'description' => '',
        'image' => 'premium-greek-pasta.jpg',
    ]);
    }
}
