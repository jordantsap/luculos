<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Category;
use DB;
class CategorySeeder extends Seeder
{
    public function run()
    {
      $category = new Category;

      app()->setLocale('en');

      $category->title = 'Wine';
      $category->slug = 'wine';
      $category->image = 'wine.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('el');

      $category->title = 'Κρασί';
      $category->slug = 'krasi';
      $category->image = 'wine.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();
      //--------- κρασι τελος---------------

      $category = new Category;

      app()->setLocale('en');

      $category->title = 'Sauses';
      $category->slug = 'sauses';
      $category->image = 'sauses2.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('el');

      $category->title = 'Σάλτες';
      $category->slug = 'saltses';
      $category->image = 'sauses2.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();
      //-------------------saltes telos

      $category = new Category;

      app()->setLocale('en');

      $category->title = 'Olive Oil';
      $category->slug = 'olive-oil';
      $category->image = 'olive_oil__.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('el');

      $category->title = 'Ελαιόλαδο';
      $category->slug = 'elaiolado';
      $category->image = 'olive_oil__.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();
      //-----------elaiolado telos

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Greek Pasta';
    $category->slug = 'greek-pasta';
    $category->image = 'greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Μακαρόνια';
    $category->slug = 'makaronia';
    $category->image = 'greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();
      // -----------------makaronia trelos

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Diary';
    $category->slug = 'diary';
    $category->image = 'diary.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Τυροκομικά';
    $category->slug = 'tirokomika';
    $category->image = 'diary.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();
    // -------tyria telos

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Olives';
    $category->slug = 'olives';
    $category->image = 'olives.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Ελιές';
    $category->slug = 'elies';
    $category->image = 'olives.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();
    // elies telos---------

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Honey';
    $category->slug = 'honey';
    $category->image = 'honey.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Μέλι';
    $category->slug = 'meli';
    $category->image = 'honey.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();
    //----meli telos-------

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Wine';
    $category->slug = 'bio-wine';
    $category->image = 'bio-wine.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικό Κρασί';
    $category->slug = 'viologiko-krasi';
    $category->image = 'bio-wine.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    // telos--------

        $category = new Category;

        app()->setLocale('en');

        $category->title = 'Bio Diary';
        $category->slug = 'bio-diary';
        $category->image = 'bio-diary.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('el');

        $category->title = 'Βιολογικό Τυρί';
        $category->slug = 'viologiko-tyri';
        $category->image = 'bio-diary.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();
        // telos to tyri

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Olive Oil';
    $category->slug = 'bio-olive-oil';
    $category->image = 'bio-olive_oil.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικό Ελαιόλαδο';
    $category->slug = 'viologiko-elaiolado';
    $category->image = 'bio-olive_oil.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    // telos to elaiolado

        $category = new Category;

        app()->setLocale('en');

        $category->title = 'Bio Olives';
        $category->slug = 'bio-olives';
        $category->image = 'bio-olives.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('el');

        $category->title = 'Βιολογικές Ελιές';
        $category->slug = 'viologikes-elies';
        $category->image = 'bio-olives.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();
        // telos kai oi elies

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Honey';
    $category->slug = 'bio-honey';
    $category->image = 'bio-honey.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικό Μέλι';
    $category->slug = 'viologiko-meli';
    $category->image = 'bio-olives.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    // telos to meli---------------------------------

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Greek Pasta';
    $category->slug = 'bio-greek-pasta';
    $category->image = 'bio-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικά Μακαρόνια';
    $category->slug = 'viologiko-makaroni';
    $category->image = 'bio-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    //////////----telos to makaroni

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Sauses';
    $category->slug = 'bio-sauses';
    $category->image = 'biosauses.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικές Σάλτες';
    $category->slug = 'viologikes-saltes';
    $category->image = 'biosauses.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    //////////----telos oi saltses

        $category = new Category;

        app()->setLocale('en');

        $category->title = 'Premium Olive Oil';
        $category->slug = 'premium-olive-oil';
        $category->image = 'premiumoliveoil.jpg';
        $category->description = '';
        $category->type_id = 2;
        $category->save();

        app()->setLocale('el');

        $category->title = 'Εξαιρετικής πoιότητας ελαιόλαδο';
        $category->slug = 'eksairetikis-poiotitas-elaiolado';
        $category->image = 'premiumoliveoil.jpg';
        $category->description = '';
        $category->type_id = 2;
        $category->save();
        //////////----telos to elaiolado

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Diary';
    $category->slug = 'premium-diary';
    $category->image = 'premium-diary.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Τυροκομικά';
    $category->slug = 'eksairetikis-poiotitas-tirokomika';
    $category->image = 'premium-diary.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //---terlos to tiri----------

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Olives';
    $category->slug = 'premium-olives';
    $category->image = 'premium-olives.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Ελιές';
    $category->slug = 'eksairetikis-poiotitas-elies';
    $category->image = 'premium-olives.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //--------telos to elies

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Honey';
    $category->slug = 'premium-honey';
    $category->image = 'premium-honey.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Μέλι';
    $category->slug = 'eksairetikis-poiotitas-meli';
    $category->image = 'premium-honey.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //--------telos to elies

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Wine';
    $category->slug = 'premium-wine';
    $category->image = 'premium-wine.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Κρασί';
    $category->slug = 'eksairetikis-poiotitas-krasi';
    $category->image = 'premium-wine.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //--------telos to krasi

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Sauses';
    $category->slug = 'premium-sauses';
    $category->image = 'premium-sauses.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Σάλτσες';
    $category->slug = 'eksairetikis-poiotitas-saltses';
    $category->image = 'premium-sauses.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //--------telos to krasi

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Greek Pasta';
    $category->slug = 'premium-greek-pasta';
    $category->image = 'premium-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Μακαρόνια';
    $category->slug = 'eksairetikis-poiotitas-makaroni';
    $category->image = 'premium-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    }
}
