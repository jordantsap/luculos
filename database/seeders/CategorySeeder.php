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

      app()->setLocale('de');

      $category->title = 'Wein';
      $category->slug = 'wein';
      $category->image = 'wine.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('ru');

      $category->title = 'Вино';
      $category->slug = 'вино';
      $category->image = 'wine.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();
      //--------- κρασι τελος---------------

      $category = new Category;

      app()->setLocale('en');

      $category->title = 'Sauces';
      $category->slug = 'sauces';
      $category->image = 'sauces.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('el');

      $category->title = 'Σάλτσες';
      $category->slug = 'saltses';
      $category->image = 'sauces.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('de');

      $category->title = 'Saucen';
      $category->slug = 'saucen';
      $category->image = 'sauces.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('ru');

      $category->title = 'Соусы';
      $category->slug = 'cоусы';
      $category->image = 'sauces.png';
      $category->description = '';
      $category->type_id = 1;
      $category->save();
      //-------------------saltes telos

      $category = new Category;

      app()->setLocale('en');

      $category->title = 'Olive Oil';
      $category->slug = 'olive-oil';
      $category->image = 'oliveoil.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('el');

      $category->title = 'Ελαιόλαδο';
      $category->slug = 'elaiolado';
      $category->image = 'oliveoil.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('de');

      $category->title = 'Olivenöl';
      $category->slug = 'olivenöl';
      $category->image = 'oliveoil.jpg';
      $category->description = '';
      $category->type_id = 1;
      $category->save();

      app()->setLocale('ru');

      $category->title = 'Оливковое масло';
      $category->slug = 'oливковое-масло';
      $category->image = 'oliveoil.jpg';
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

    app()->setLocale('de');

    $category->title = 'Griechische Pasta';
    $category->slug = 'griechische-pasta';
    $category->image = 'greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Греческая паста';
    $category->slug = 'греческая паста';
    $category->image = 'greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();
      // -----------------makaronia trelos

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Dairy';
    $category->slug = 'dairy';
    $category->image = 'dairy.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Τυροκομικά';
    $category->slug = 'tirokomika';
    $category->image = 'dairy.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('de');

    $category->title = 'Käse';
    $category->slug = 'käse';
    $category->image = 'dairy.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Сыр';
    $category->slug = 'сыр';
    $category->image = 'dairy.jpg';
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

    app()->setLocale('de');

    $category->title = 'Oliven';
    $category->slug = 'oliven';
    $category->image = 'olives.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Оливки';
    $category->slug = 'oливки';
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

    app()->setLocale('de');

    $category->title = 'Honig';
    $category->slug = 'honig';
    $category->image = 'honey.jpg';
    $category->description = '';
    $category->type_id = 1;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Мед';
    $category->slug = 'мед';
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

    app()->setLocale('de');

    $category->title = 'Biologischer Wein';
    $category->slug = 'biologischer-wein';
    $category->image = 'bio-wine.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Биологическое вино';
    $category->slug = 'Биологическое-вино';
    $category->image = 'bio-wine.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    // telos--------

        $category = new Category;

        app()->setLocale('en');

        $category->title = 'Bio dairy';
        $category->slug = 'bio-dairy';
        $category->image = 'bio-dairy.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('el');

        $category->title = 'Βιολογικό Τυρί';
        $category->slug = 'viologiko-tyri';
        $category->image = 'bio-dairy.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('de');

        $category->title = 'Bio-Käse';
        $category->slug = 'Bio-Käse';
        $category->image = 'bio-dairy.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('ru');

        $category->title = 'Органический сыр';
        $category->slug = 'Органический-сыр';
        $category->image = 'bio-dairy.jpg';
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

    app()->setLocale('de');

    $category->title = 'Biologisches Olivenöl';
    $category->slug = 'biologisches-olivenöl';
    $category->image = 'bio-olive_oil.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Биологическое оливковое масло';
    $category->slug = 'Биологическое-оливковое-масло';
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

        app()->setLocale('de');

        $category->title = 'Bio-Oliven';
        $category->slug = 'Bio-Oliven';
        $category->image = 'bio-olives.jpg';
        $category->description = '';
        $category->type_id = 3;
        $category->save();

        app()->setLocale('ru');

        $category->title = 'Органические оливки';
        $category->slug = 'oрганические-оливки';
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

    app()->setLocale('de');

    $category->title = 'Bio-Honig';
    $category->slug = 'bio-honig';
    $category->image = 'bio-honey.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Органический мед';
    $category->slug = 'oрганический-мед';
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

    app()->setLocale('de');

    $category->title = 'Bio-Spaghetti';
    $category->slug = 'bio-spaghetti';
    $category->image = 'bio-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Органические спагетти';
    $category->slug = 'Органические-спагетти';
    $category->image = 'bio-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    //////////----telos to makaroni

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Bio Sauces';
    $category->slug = 'bio-sauces';
    $category->image = 'biosauces.png';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Βιολογικές Σάλτσες';
    $category->slug = 'viologikes-saltes';
    $category->image = 'biosauces.png';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('de');

    $category->title = 'Bio-Saucen';
    $category->slug = 'Bio-Saucen';
    $category->image = 'biosauces.png';
    $category->description = '';
    $category->type_id = 3;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Органические соусы';
    $category->slug = 'oрганические-соусы';
    $category->image = 'biosauces.png';
    $category->description = '';
    $category->type_id = 3;
    $category->save();
    //////////----telos oi saltses

        $category = new Category;

        app()->setLocale('en');

        $category->title = 'Premium Olive Oil';
        $category->slug = 'premium-olive-oil';
        $category->image = 'premium-olive-oil.jpg';
        $category->description = '';
        $category->type_id = 2;
        $category->save();


        app()->setLocale('de');

        $category->title = 'Premium Olivenöl';
        $category->slug = 'premium-olivenöl';
        $category->image = 'premium-olive-oil.jpg';
        $category->description = '';
        $category->type_id = 2;
        $category->save();

        app()->setLocale('ru');

        $category->title = 'Оливковое масло премиум-класса';
        $category->slug = 'Оливковое-масло-премиум-класса';
        $category->image = 'premium-olive-oil.jpg';
        $category->description = '';
        $category->type_id = 2;
        $category->save();
        //////////----telos to elaiolado

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium dairy';
    $category->slug = 'premium-dairy';
    $category->image = 'premium-dairy.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Τυροκομικά';
    $category->slug = 'eksairetikis-poiotitas-tirokomika';
    $category->image = 'premium-dairy.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('de');

    $category->title = 'Premium-Molkerei';
    $category->slug = 'Premium-Molkerei';
    $category->image = 'premium-dairy.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Премиум молочные продукты';
    $category->slug = 'Премиум-молочные-продукты';
    $category->image = 'premium-dairy.jpg';
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

    app()->setLocale('de');

    $category->title = 'Premium Oliven';
    $category->slug = 'premium-oliven';
    $category->image = 'premium-olives.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Премиум Оливки';
    $category->slug = 'Премиум-Оливки';
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

    app()->setLocale('de');

    $category->title = 'Premium Honig';
    $category->slug = 'premium-honig';
    $category->image = 'premium-honey.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Премиум Мед';
    $category->slug = 'Премиум-Мед';
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

    app()->setLocale('de');

    $category->title = 'Premium Wein';
    $category->slug = 'premium-wein';
    $category->image = 'premium-wine.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Премиум вино';
    $category->slug = 'πремиум-вино';
    $category->image = 'premium-wine.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    //--------telos to krasi

    $category = new Category;

    app()->setLocale('en');

    $category->title = 'Premium Sauces';
    $category->slug = 'premium-sauces';
    $category->image = 'premium-sauces.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('el');

    $category->title = 'Εξαιρετικής πoιότητας Σάλτσες';
    $category->slug = 'eksairetikis-poiotitas-saltses';
    $category->image = 'premium-sauces.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('de');

    $category->title = 'Premium Saucen';
    $category->slug = 'premium-saucen';
    $category->image = 'premium-sauces.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Премиум Соусы';
    $category->slug = 'πемиум-cоусы';
    $category->image = 'premium-sauces.jpg';
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

    app()->setLocale('de');

    $category->title = 'Premium griechische Pasta';
    $category->slug = 'premium-griechische-Pasta';
    $category->image = 'premium-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();

    app()->setLocale('ru');

    $category->title = 'Греческая Паста Премиум';
    $category->slug = 'Греческая-Паста-Премиум';
    $category->image = 'premium-greek-pasta.jpg';
    $category->description = '';
    $category->type_id = 2;
    $category->save();
    }
}
