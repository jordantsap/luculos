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

      $product->title = 'Dellagrazia Extra Virgin Olive Oil';
      $product->slug = 'dellagrazia-extra-virgin-olive-oil';
      $product->image = 'dellagrazia-extra-virgin-olive-oil.jpg';
      $product->description = 'Dellagrazia Extra Virgin Olive Oil is a cold-pressed product. Our olive trees are grown on the sunny island of Syros. Οlive grove is located in the SW of the island in a coastal location. Τhe fruit absorbs all the beneficial properties of the sea air.
Dellagrazia Extra Virgin Olive Oil contains characteristics that determine the quality of olive oil such as rich fruity aroma and a refreshing taste as well as a powerful antioxidant effect.
Dellagrazia Extra Virgin Olive Oil has a golden-green hue, a balanced spicy taste with a sweet, light aftertaste that lasts. Its wonderful fruity aroma, with touches of pear and almond, is due to the olive tree variety "Koroneiki" from which it is produced.
The integrated cultivation and harvesting methods in combination with modern production and storage methods ensure its special characteristics and superior quality.';
      $product->box = 1;
      $product->palette = 40;
      $product->categories()->sync([3]);
      $product->type_id = 3;
      $product->save();

      app()->setLocale('de');

      $product->title = 'Natives Olivenöl Extra von Dellagrazia';
      $product->slug = 'natives-olivenol-extra-von-dellagrazia';
      $product->image = 'Noimage.jpg';
      $product->description = 'Natives Olivenöl Extra von Dellagrazia ist ein kaltgepresstes Produkt. Unsere Olivenbäume wachsen auf der sonnigen Insel Syros. Die Olivenplantage befindet sich im Südwesten der Insel an einer Küstenlage. Die Frucht nimmt alle vorteilhaften Eigenschaften der Seeluft auf.
Natives Olivenöl Extra von Dellagrazia enthält Eigenschaften, die die Qualität von Olivenöl bestimmen, wie ein reiches fruchtiges Aroma und einen erfrischenden Geschmack sowie eine starke antioxidative Wirkung.
Natives Olivenöl Extra von Dellagrazia hat einen goldgrünen Farbton, einen ausgewogenen, würzigen Geschmack mit einem süßen, leichten Nachgeschmack, der anhält. Sein wunderbar fruchtiges Aroma mit einem Hauch von Birne und Mandel ist auf die Olivenbaumsorte "Koroneiki" zurückzuführen, aus der es hergestellt wird.
Die integrierten Anbau- und Erntemethoden in Kombination mit modernen Produktions- und Lagermethoden gewährleisten die besonderen Eigenschaften und die überlegene Qualität.';
      $product->box = 1;
      $product->palette = 56;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Dellagrazia Extra Virgin Оливковое масло';
      $product->slug = 'dellagrazia-extra-virgin-оливковое-масло';
      $product->image = 'dellagrazia-extra-virgin-оливковое-масло.jpg';
      $product->description = 'Dellagrazia Extra Virgin Olive Oil - продукт холодного отжима. Наши оливковые деревья выращиваются на солнечном острове Сирос. Живая роща расположена на юго-западе острова в прибрежном месте. Плод поглощает все полезные свойства морского воздуха.
Оливковое масло Dellagrazia Extra Virgin содержит характеристики, которые определяют качество оливкового масла, такие как богатый фруктовый аромат и освежающий вкус, а также мощный антиоксидантный эффект.
Оливковое масло Dellagrazia Extra Virgin имеет золотисто-зеленый оттенок, сбалансированный пряный вкус с продолжительным сладким легким послевкусием. Его замечательный фруктовый аромат с нотками груши и миндаля обусловлен сортом оливкового дерева "Koroneiki", из которого он производится.
Интегрированные методы выращивания и сбора урожая в сочетании с современными методами производства и хранения обеспечивают его особые характеристики и превосходное качество.';

      $product->box = 1;
      $product->palette = 67;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();
      //---------elproduct1---------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Unsold wheat';
      $product->slug = 'thrakiotiki-zimi-unsold-wheat';
      $product->image = 'premium.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 77;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      // app()->setLocale('de');
      //
      // $product->title = '';
      // $product->slug = '';
      // $product->image = 'premium.png';
      // $product->description = '';
      //
      // $product->box = 1;
      // $product->palette = 50;
      // $product->categories()->sync([3]);
      // $product->type_id = 1;
      // $product->save();
      //
      // app()->setLocale('ru');
      //
      // $product->title = '';
      // $product->slug = '';
      // $product->image = 'premium.png';
      // $product->description = '';
      //
      // $product->box = 1;
      // $product->palette = 46;
      // $product->categories()->sync([3]);
      // $product->type_id = 1;
      // $product->save();
      //------------ruproduct2-------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Mac';
      $product->slug = 'thrakiotiki-zimi-mac';
      $product->image = 'thrakiotiki-zimi-mac.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Orzo';
      $product->slug = 'thrakiotiki-zimi-orzo';
      $product->image = 'thrakiotiki-zimi-orzo.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Pligouri';
      $product->slug = 'thrakiotiki-zimi-pligouri';
      $product->image = 'thrakiotiki-zimi-pligouri.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();
  //---------------------------------------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Trachana with milk (Sweet)';
      $product->slug = 'thrakiotiki-zimi-trachana-with-milk-sweet';
      $product->image = 'thrakiotiki-zimi-trachana-with-milk-sweet.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Trachana with vegetables (Sweet)';
      $product->slug = 'thrakiotiki-zimi-trachana-with-vegetables-sweet';
      $product->image = 'thrakiotiki-zimi-trachana-with-vegetables-sweet.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Trachana with yogurt (Sweet)';
      $product->slug = 'thrakiotiki-zimi-trachana-with-yogurt-sweet';
      $product->image = 'thrakiotiki-zimi-trachana-with-yogurt-sweet';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();
      //-----------------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Sterile Trachana';
      $product->slug = 'thrakiotiki-zimi-sterile-trachana';
      $product->image = 'thrakiotiki-zimi-sterile-trachana.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - Vides';
      $product->slug = 'thrakiotiki-zimi-vides';
      $product->image = 'thrakiotiki-zimi-vides.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thrakiotiki zimi - chilopitaki';
      $product->slug = 'thrakiotiki-zimi-chilopitaki';
      $product->image = 'thrakiotiki-zimi-chilopitaki.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(4);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Strawberry & chocolate';
      $product->slug = 'papayiannidi-strawberry-chocolate';
      $product->image = 'papayiannidi-strawberry-chocolate.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Forest fruits & honey';
      $product->slug = 'papayiannidi-forest-fruits-honey';
      $product->image = 'papayiannidi-forest-fruits-honey.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato, olives & ouzo';
      $product->slug = 'papayiannidi-tomato-olives-ouzo';
      $product->image = 'papayiannidi-tomato-olives-ouzo.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato & Aubergine';
      $product->slug = 'papayiannidi-tomato-aubergine';
      $product->image = 'papayiannidi-tomato-aubergine.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato & orange';
      $product->slug = 'papayiannidi-tomato-orange';
      $product->image = 'papayiannidi-tomato-orange.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato, balsamic vinegard & peppers';
      $product->slug = 'papayiannidi-tomato-balsamic-vinegard-peppers';
      $product->image = 'papayiannidi-tomato-balsamic-vinegard-peppers.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato & basil';
      $product->slug = 'papayiannidi-tomato-basil';
      $product->image = 'papayiannidi-tomato-basil.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Tomato, spicy';
      $product->slug = 'papayiannidi-tomato-spicy';
      $product->image = 'papayiannidi-tomato-spicy.png';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Orange, tangerine & lemon';
      $product->slug = 'papayiannidi-orange-tangerine-lemon';
      $product->image = 'papayiannidi-orange-tangerine-lemon.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Peach & Ouzo';
      $product->slug = 'papayiannidi-peach-ouzo';
      $product->image = 'papayiannidi-peach-ouzo.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Papayiannidi - Raspberry & Ouzo';
      $product->slug = 'papayiannidi-raspberry-ouzo';
      $product->image = 'papayiannidi-raspberry-ouzo.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync(2);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Rosemary';
      $product->slug = 'thaseon-gi-rosemary';
      $product->image = 'thaseon-gi-rosemary.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Chilli pepper';
      $product->slug = 'thaseon-gi-chilli-pepper';
      $product->image = 'thaseon-gi-chilli-pepper.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Lemon';
      $product->slug = 'thaseon-gi-lemon';
      $product->image = 'thaseon-gi-lemon.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi';
      $product->slug = 'thaseon-gi';
      $product->image = 'thaseon-gi.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Orange';
      $product->slug = 'thaseon-gi-orange';
      $product->image = 'thaseon-gi-orange.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Safran';
      $product->slug = 'thaseon-gi-safran';
      $product->image = 'thaseon-gi-safran.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Garlic';
      $product->slug = 'thaseon-gi-garlic';
      $product->image = 'thaseon-gi-garlic.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Thaseon gi - Oregano';
      $product->slug = 'thaseon-gi-oregano';
      $product->image = 'thaseon-gi-oregano.jpg';
      $product->description = '';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([3]);
      $product->type_id = 1;
      $product->save();

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Lagyros -BIO';
      $product->slug = 'lagyrosbio';
      $product->image = 'lagyros.png';
      $product->description = 'Organic red wine – dry
Ikaria: Protected Designation of Origin
The lively variety Fokiano and the luscious Kountouro (Mandilaria) combine their virtues in a ruby red wine, with aromas of wildflowers and black fruits, with a full flavor and a long aftertaste.
Its special character, at 15 – 17 ° C, seeks fried meat and red dishes of Mediterranean cuisine';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();


      app()->setLocale('de');

      $product->title = 'Lagyros -BIO';
      $product->slug = 'lagyrosde';
      $product->image = 'lagyros.png';
      $product->description = 'Biologischer Rotwein – Trocken

Ikaria: Geschützte Ursprungsbezeichnung

Die lebhafte Rebsorte Fokiano und die üppige Kountouro (Mandilaria) vereinen ihre Tugenden in einem rubinroten Wein, mit Aromen von Wildblumen und schwarzen Früchten, mit einem vollem  Geschmack und einem langen Nachgeschmack.

Sein besonderer Charakter, bei 15 – 17 °C, sucht gebratenes Fleisch und rote Gerichte der mediterranen Küche. 750 ml';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Lagyros -BIO';
      $product->slug = 'lagyrosru';
      $product->image = 'lagyros.png';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'ЛАГИРОС

Защитная географическая зона.

Красное сухое биологическое вино Икарии.

Невероятное Фокиано и буйный характер Кофдуро

(Mandilaria) объединяют свои достоинства в вине с рубиновым цветом, с ароматом диких цветов и черных фруктов.

Рекомендуется пить вино,охлажденным до 15 - 17˚C.

Идельно сочетается с блюдами Средиземной кухни.';

      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Begleri - BIO';
      $product->slug = 'begleri';
      $product->image = 'begleri.jpg';
      $product->description = 'Organic white wine – dry
Ikaria: Protected Designation of Origin
A special wine of the local variety Begleri.
The bright colors and aromas of fruits and wildflowers are the first elements that make up the image of the wine and make you taste it.
Its balanced taste with a cool aftertaste complements the interplay of sensations and leaves the mouth with the best impressions.
Enjoy at 8-10 ° C with fish or white meat dishes';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();


      app()->setLocale('de');

      $product->title = 'Begleri — BIO';
      $product->slug = 'begleri-bio-2';
      $product->image = 'begleri-bio-2.jpg';
      $product->description = 'Biologischer Weißwein – Trocken

Ikaria: Geschützte Ursprungsbezeichnung

Ein besonderer Wein der lokalen Sorte Begleri.

Die hellen Farben und Aromen von Früchten und Wildblumen sind die ersten Elemente, die das Bild des Weins ausmachen und Sie dazu bringen, es zu kosten.

Sein ausgewogener Geschmack mit kühlem Nachgeschmack ergänzt das Zusammenspiel der Empfindungen und hinterlässt den Mund mit den besten Eindrücken.

Genießen Sie bei 8-10 °C mit Fisch oder weiße Fleischgerichte. 750 ml';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Begleri — BIO';
      $product->slug = 'begleri-bio-2ru';
      $product->image = 'begleri-bio-2.jpg';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'БЕГЛЕРИ

Защитная географическая область.

Белое сухое биологическое вино Икарии.

750 мл - 12,5 градусов.

С местного сорта Beglijri,винограда,выращенного

в объятиях моря, светлого цвета с ароматом цитрусовых(цветов лимона и грейпфрута).

Баланс вкусов оставляет во рту приятное ощущение ананаса и персика.

Идеально подходит к блюдам Средиземной кухни.

Наслаждайтесь им ,охлажденным до 8-10 ° C.';

      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Rosé - BIO';
      $product->slug = 'rose-bioen';
      $product->image = 'rose-bio1.png';
      $product->description = 'Organic wine – semi dry rose
Ikaria: Protected Designation of Origin
The red varieties of our region and a cool way of making wine are the main ingredients of this cozy wine.
Its color is pink, its nose is rich in wildflowers and red fruits and its taste is balanced with a sweet aftertaste.
The special character looks for dishes of Mediterranean cuisine and especially pasta or fish with red sauce.
It is drunk at 8-10 ° C.';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('de');

      $product->title = 'Rosé - BIO';
      $product->slug = 'rose-bio';
      $product->image = 'rose-bio.png';
      $product->description = 'Biologischer Wein – Semi trocken Rosé

Ikaria: Geschützte Ursprungsbezeichnung
Die roten Sorten unserer Region und eine kühle Art der Weinherstellung sind die Hauptzutaten für diesen gemütlichen Wein.
Seine Farbe ist rosa, seine Nase ist reich an Wildblumen und roten Früchten und sein Geschmack ist mit einem süßen Nachgeschmack ausgeglichen.
Der besondere Charakter sucht nach Gerichten der mediterranen Küche und vor allem Pasta oder Fisch mit roter Sauce.
Es wird bei 8-10 °C getrunken. 750 ml';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Rosé - BIO';
      $product->slug = 'rose-bioru';
      $product->image = 'rose-bio.png';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'РОЗОВОЕ ВИНО

Защитная географическая зона.

Розовое,полусухое биологическое вино Икарии.

750 мл - 13%

Красные сорта винограда нашего региона и прохладный метод виноделия являются важными по существу критериями для создания этого замечательного вина розового цвета,совмещающее запах диких цветов и красных фруктов,создавая сладкий привкус.

Особый характер этого вина идеально сочетается с блюдами из макаронных изделий и также подается к рыбным блюдам.

Наслаждайтесь этим вином,охлаженным до 8-10 ° C.';

      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();
      ////-------------------------------------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Akratos - BIO';
      $product->slug = 'akratos';
      $product->image = 'akratos.jpg';
      $product->description = 'Organic red wine – dry
Ikaria: Protected Designation of Origin
From our best vineyards we choose grapes of the varieties Fokianos and Mantilaria and after six months maturing in our barrels we offer you a special wine. Its color is ruby red and its nose is rich in red fruits and spices. Its lush character is complemented by the velvety taste and long aftertaste.
Enjoy it at 16 – 18 ° C with cheese or red dishes of Mediterranean cuisine



Biologischer Rotwein – Trocken
Ikaria: Geschützte Ursprungsbezeichnung
Aus unseren besten Weinbergen wählen wir Trauben der Sorten Fokianos und Mantilaria und nach sechs Monaten Reifung in unseren Fässern bieten wir Ihnen einen besonderen Wein an. Seine Farbe ist rubinrot und seine Nase ist reich an roten Früchten und Gewürzen. Sein üppiger Charakter wird durch den samtigen Geschmack und langen Nachgeschmack ergänzt.
Genießen Sie  bei 16 – 18 °C mit Käse oder roten Gerichten der mediterranen Küche. 750 ml';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('de');

      $product->title = 'Akratos - BIO';
      $product->slug = 'akratosde';
      $product->image = 'akratos.jpg';
      $product->description = 'Biologischer Rotwein – Trocken
Ikaria: Geschützte Ursprungsbezeichnung
Aus unseren besten Weinbergen wählen wir Trauben der Sorten Fokianos und Mantilaria und nach sechs Monaten Reifung in unseren Fässern bieten wir Ihnen einen besonderen Wein an. Seine Farbe ist rubinrot und seine Nase ist reich an roten Früchten und Gewürzen. Sein üppiger Charakter wird durch den samtigen Geschmack und langen Nachgeschmack ergänzt.
Genießen Sie  bei 16 – 18 °C mit Käse oder roten Gerichten der mediterranen Küche. 750 ml';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Akratos - BIO';
      $product->slug = 'akratosru';
      $product->image = 'akratos.jpg';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'Akratos  - АКРАТОС

Защитная географическая зона.

Красное сухое биологическое вино Икарии.

750 мл - 14.%.

Из лучших виноградников выбираем разновидности Фокианоса и Мандилиарии. Шесть месяцев виноград созревает в бочках для получения этого вида вина ,бордового цвета с привкусом красных фруктов и специй.

Наслаждайтесь вином,охлажденным при тепературе 16 - 18 ° C .

Подается к мясным блюдам и к закускам из сыров.';

      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();
      /////-----------------------------------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Melisandy - BIO';
      $product->slug = 'melisandy';
      $product->image = 'melisandy.jpg';
      $product->description = 'From organic grapes – sun-ripened
A special sweet wine from local varieties with the ancient art of hanging grapes to the sun.
Its honey-colored color reveals its maturity, while the nose is dominated by aromas of sweet caramel, raisins and nuts.
Notes of dried figs and honey complete the aromatic profile and its seductive sweet taste.
At 12-14 ° C it is ideally combined with chocolate cakes or red pies.



Aus Bio-Trauben – Sonnengereift
Ein besonderer süßer Wein aus einheimischen Sorten mit der alten Kunst, Trauben an die Sonne zu hängen.
Seine honigfarbene Farbe verrät seine Reife, während die Nase von Aromen von süßem Karamell, Rosinen und Nüssen dominiert wird.
Noten von getrockneten Feigen und Honig ergänzen das aromatische Profil und seinen verführerisch süßen Geschmack.
Bei 12-14 °C wird er ideal mit Schokoladentorten oder roten Obstkuchen kombiniert.  375 ml';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();


      app()->setLocale('de');

      $product->title = 'Melisandy - BIO';
      $product->slug = 'melisandyde';
      $product->image = 'melisandy.jpg';
      $product->description = 'Aus Bio-Trauben – Sonnengereift
Ein besonderer süßer Wein aus einheimischen Sorten mit der alten Kunst, Trauben an die Sonne zu hängen.
Seine honigfarbene Farbe verrät seine Reife, während die Nase von Aromen von süßem Karamell, Rosinen und Nüssen dominiert wird.
Noten von getrockneten Feigen und Honig ergänzen das aromatische Profil und seinen verführerisch süßen Geschmack.
Bei 12-14 °C wird er ideal mit Schokoladentorten oder roten Obstkuchen kombiniert.  375 ml';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Melisandy - BIO';
      $product->slug = 'melisandyru';
      $product->image = 'melisandy.jpg';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'Melisandy МЕЛИСАНДИ

Защитная географическая зона.

Красное вяленное биологическое вино Икарии.

Время созревания в бочках 24 месяца.

375 мл - 15,5% .

Уникальное сладкое вино из местных сортов с

особым искусством высушивания винограда на солнце.

Зрелость вина определяется по янтарному цвету.Доминируют ароматы карамели,изюма и сушенных орешков.Утонченность вина дополняется привкусом черного шоколада.

При 12-14˚C вино идеально сочетается со сладкими блюдами и десертом.';

      $product->categories()->sync([1, 8]);
      $product->type_id = 1;
      $product->save();
      ////-----------------------------------------


      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Apocalypsis -BIO';
      $product->slug = 'apocalypsis';
      $product->image = 'apocalypsis.jpg';
      $product->description = 'This wine is a masterly blend of the Greek variety Mavroudi of Thrace at eighty-five percent and Merlot at fifteen percent. The grapes have matured perfectly and healthy. Their early morning harvest and their promotion to the winery within one hour makes wine making possible right after grape picking. In the application of the classic red winemaking with long extraction, the following stages are followed: Harvesting grapes, stalking and mincing, without being pressed. This leads to an exceptional quality wine. The temperature of the alcoholic fermentation is kept strictly at 26 C in automatic vatifiers of five tons and the fermentation takes place in oak barrels';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1, 8]);
      $product->type_id = 1;
      $product->save();


      app()->setLocale('de');

      $product->title = 'Apocalypsis -BIO';
      $product->slug = 'apocalypsisde';
      $product->image = 'apocalypsis.jpg';
      $product->description = 'Dieser Wein ist eine meisterhafte Mischung aus der griechischen Sorte Mavroudi von Thrakien mit fünfundachtzig Prozent und von Merlot mit fünfzehn Prozent. Die Trauben sind perfekt und gesund gereift. Ihre Ernte am frühen Morgen und ihre Beförderung zum Weingut innerhalb einer Stunde  macht die Weinbereitung direkt nach der Traubenaufnahme möglich. Bei der Anwendung der klassischen roten Weinbereitung mit langer Extraktion werden folgenden Stufen verfolgt: Trauben ernten, entstielen und zerkleinern, ohne gepresst zu werden. Das  führt zu einem außergewöhnlichen Qualitätswein. Die Temperatur der alkoholischen Gärung wird streng auf 26 C in automatischen Vinifikatoren von fünf Tonnen gehalten und die Fermentation findet in Eichenfässer statt.';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync(1,8);
      $product->type_id = 1;
      $product->save();

      app()->setLocale('ru');

      $product->title = 'Apocalypsis -BIO';
      $product->slug = 'apocalypsisru';
      $product->image = 'apocalypsis.jpg';
      $product->box = 1;
      $product->palette = 50;
      $product->description = 'АПОКАЛИПСИС

Это вино – виртуозная смесь греческого фракийского сорта Мавроуди и сорта Мерло.Из винограда высокого качества,хорошо созревшего. Урожай собирается рано утром и перевозка в винодельню происходит ровно через час после сбора.

Применение классической красной винификации с длительной экстракцией происходит по следующим шагам: сбор урожая винограда, дестабилизация и дробление без давления. Таким образом мы достигаем превосходного качества вина, которое вы видите, и вы можете им насладиться. Температура алкогольной ферментации строго контролируется на уровне 26 градусов и производится в автоматических виноделах по 5 тонн и происходит ферментация в дубовых бочках.';

      $product->categories()->sync(1,8);
      $product->type_id = 1;
      $product->save();
      //------------------------------------

      $product = new Product;

      app()->setLocale('en');

      $product->title = 'Viston Red Wine - BIO';
      $product->slug = 'viston-bio-red-wine';
      $product->image = 'viston-bio-red-wine.png';
      $product->description = 'Organic, dry, red wine from Mavroudi and Merlot varieties. The process from the harvest to the bottling ensures the excellent result of taste, flavor and aftertaste. His character unfolds at 16 -18 C and accompanies red meat and Meditettanean dishes.';

      $product->box = 1;
      $product->palette = 68;
      $product->categories()->sync([1,8]);
      $product->type_id = 1;
      $product->save();

      // app()->setLocale('de');
      //
      // $product->title = 'deproduct3';
      // $product->slug = 'deproduct3';
      // $product->image = 'bio.png';
      // $product->description = '';
      //
      // $product->box = 1;
      // $product->palette = 79;
      // $product->categories()->sync(1,8);
      // $product->type_id = 1;
      // $product->save();
      //
      // app()->setLocale('ru');
      //
      // $product->title = 'ruproduct3';
      // $product->slug = 'ruproduct3';
      // $product->image = 'bio.png';
      // $product->box = 1;
      // $product->palette = 50;
      // $product->description = '';
      //
      // $product->categories()->sync(1,8);
      // $product->type_id = 1;
      // $product->save();

      // $product = new Product;
      //
      // app()->setLocale('en');
      //
      // $product->title = '';
      // $product->slug = '';
      // $product->image = 'bio.png';
      // $product->description = '';
      //
      // $product->box = 1;
      // $product->palette = 68;
      // $product->categories()->sync(4);
      // $product->type_id = 1;
      // $product->save();

      app()->setLocale('de');

      $product->title = 'Mixed cheese';
      $product->slug = 'mixcheese';
      $product->image = 'mixcheese.png';
      $product->description = 'Παράγεται από 100 % φρέσκο Ελληνικό αγελαδινό και αιγοπρόβειο γάλα όπου συλλέγεται την περιοχή της Θράκης. Πρωτότυπη συνταγή με ιδιαίτερες γεύσης λόγο της προσθήκης πρόβειου και κατσικίσιου γάλακτος που ικανοποιεί μεγάλο εύρος καταναλωτικού κοινού λόγω της ήπιας αλλά ευχάριστης γεύσης του αλλά και της προσιτής τιμής του.';

      $product->box = 1;
      $product->palette = 79;
      $product->categories()->sync(5);
      $product->type_id = 1;
      $product->save();

      // app()->setLocale('ru');
      //
      // $product->title = 'ruproduct3';
      // $product->slug = 'ruproduct3';
      // $product->image = 'bio.png';
      // $product->box = 1;
      // $product->palette = 50;
      // $product->description = '';
      //
      // $product->categories()->sync(1);
      // $product->type_id = 1;
      // $product->save();

    }
}
