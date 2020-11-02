<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $page = new Page;

      app()->setLocale('en');

      $page->title = 'Awesome Translated Post!';
      $page->image = '';
      $page->description = 'Hello World! It works!!';
      $page->save();

      app()->setLocale('de');

      $page->title = 'Super Article traduit en français!';
      $page->image = '';
      $page->description = 'Bonjour le monde! Ca fonctionne bien !!';
      $page->save();
    }
}
