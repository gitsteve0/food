<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            [
                'category_id' => 1,
                'name' => [
                    'tm' => 'Çizburger',
                    'ru' => 'Чизбургер',
                    'en' => 'Cheeseburger',
                ],
                'price' => 55,
                'active' => 1,
            ],
            [
                'category_id' => 1,
                'name' => [
                    'tm' => 'Towuk burger',
                    'ru' => 'Чикенбургер',
                    'en' => 'Chickenburger',
                ],
                'price' => 60,
                'active' => 0,
            ],
            [
                'category_id' => 1,
                'name' => [
                    'tm' => 'Towukly Sendwiç',
                    'ru' => 'Сэндвич с Курицей',
                    'en' => 'Chicken Sandwich',
                ],
                'price' => 40,
                'active' => 1,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'tm' => 'Napoleon',
                    'ru' => 'Наполеон',
                    'en' => 'Napoleon',
                ],
                'price' => 45,
                'active' => 0,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'tm' => 'Esterhaizer',
                    'ru' => 'Эстерхайзер',
                    'en' => 'Esterheiser',
                ],
                'price' => 55,
                'active' => 1,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'tm' => 'Çizkeýk',
                    'ru' => 'Чизкейк',
                    'en' => 'Cheesecake',
                ],
                'price' => 50,
                'active' => 1,
            ],
            [
                'category_id' => 2,
                'name' => [
                    'tm' => 'Şokolatly Doňdyrma',
                    'ru' => 'Шоколадное Мороженое',
                    'en' => 'Chocolate ice cream',
                ],
                'price' => 40,
                'active' => 1,
            ],
            [
                'category_id' => 3,
                'name' => [
                    'tm' => 'Towukly Sezar',
                    'ru' => 'Цезарь с Курицей',
                    'en' => 'Caesar with Chicken',
                ],
                'price' => 55,
                'active' => 1,
            ],
            [
                'category_id' => 3,
                'name' => [
                    'tm' => 'San-Marino',
                    'ru' => 'Сан-Марино',
                    'en' => 'San-Marino',
                ],
                'price' => 60,
                'active' => 0,
            ],
            [
                'category_id' => 3,
                'name' => [
                    'tm' => 'Gyzgyn Kombo',
                    'ru' => 'Теплый Комбо',
                    'en' => 'Warm Combo',
                ],
                'price' => 55,
                'active' => 0,
            ],
            [
                'category_id' => 4,
                'name' => [
                    'tm' => 'Türk Ertirligi',
                    'ru' => 'Турецкий Завтрак',
                    'en' => 'Turkish Breakfast',
                ],
                'price' => 40,
                'active' => 1,
            ],
            [
                'category_id' => 4,
                'name' => [
                    'tm' => 'Peýnirli Heýgenek',
                    'ru' => 'Омлет с сыром',
                    'en' => 'Omelet with cheese',
                ],
                'price' => 45,
                'active' => 1,
            ],
            [
                'category_id' => 4,
                'name' => [
                    'tm' => 'Şöhlatly Gözleme',
                    'ru' => 'Гезлеме с Колбасой',
                    'en' => 'Gozleme with Sausage',
                ],
                'price' => 60,
                'active' => 0,
            ],
            [
                'category_id' => 4,
                'name' => [
                    'tm' => 'Menemen',
                    'ru' => 'Менемен',
                    'en' => 'Menemen',
                ],
                'price' => 40,
                'active' => 1,
            ],
            [
                'category_id' => 5,
                'name' => [
                    'tm' => 'Kola',
                    'ru' => 'Кола',
                    'en' => 'Cola',
                ],
                'price' => 30,
                'active' => 0,
            ],
            [
                'category_id' => 5,
                'name' => [
                    'tm' => 'Pyrtykal şiresi',
                    'ru' => 'Апельсиновый Фреш',
                    'en' => 'Orange Fresh',
                ],
                'price' => 50,
                'active' => 1,
            ],
            [
                'category_id' => 5,
                'name' => [
                    'tm' => 'Alma şiresi',
                    'ru' => 'Яблочный Фреш',
                    'en' => 'Apple Fresh',
                ],
                'price' => 55,
                'active' => 1,
            ],
            [
                'category_id' => 5,
                'name' => [
                    'tm' => 'Pepsi',
                    'ru' => 'Пепси',
                    'en' => 'Pepsi',
                ],
                'price' => 30,
                'active' => 1,
            ],
            [
                'category_id' => 6,
                'name' => [
                    'tm' => 'Paça Çorba',
                    'ru' => 'Пача Суп',
                    'en' => 'Pacha Soup',
                ],
                'price' => 40,
                'active' => 1,
            ],
            [
                'category_id' => 6,
                'name' => [
                    'tm' => 'Merjimek Çorba',
                    'ru' => 'Чечевичный Cуп',
                    'en' => 'Lentil Soup',
                ],
                'price' => 30,
                'active' => 1,
            ],
            [
                'category_id' => 6,
                'name' => [
                    'tm' => 'Towuk Çorba',
                    'ru' => 'Куриный Суп',
                    'en' => 'Chicken Soup',
                ],
                'price' => 50,
                'active' => 0,
            ],
            [
                'category_id' => 6,
                'name' => [
                    'tm' => 'Unaş',
                    'ru' => 'Унаш',
                    'en' => 'Unash',
                ],
                'price' => 45,
                'active' => 1,
            ],
        ];
        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'name_tm' => $obj['name']['tm'],
                'name_ru' => $obj['name']['ru'],
                'name_en' => $obj['name']['en'],
                'price' => $obj['price'],
                'active' => $obj['active'],
            ]);
        }
    }
}
