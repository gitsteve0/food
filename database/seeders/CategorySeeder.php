<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => [
                    'tm' => 'Burgerler we sandwiçler',
                    'ru' => 'Бургеры и Сэндвичи',
                    'en' => 'Burgers and Sandwiches',
                ],
            ],
            [
                'name' => [
                    'tm' => 'Süýjilikler',
                    'ru' => 'Десерты',
                    'en' => 'Desserts',
                ],
            ],
            [
                'name' => [
                    'tm' => 'Işdä Açarlar',
                    'ru' => 'Салаты',
                    'en' => 'Salads',
                ],
            ],
            [
                'name' => [
                    'tm' => 'Ertirlik',
                    'ru' => 'Завтраки',
                    'en' => 'Breakfast',
                ],
            ],
            [
                'name' => [
                    'tm' => 'Içgiler',
                    'ru' => 'Напитки',
                    'en' => 'Drinks',
                ],
            ],
            [
                'name' => [
                    'tm' => 'Çorbalar',
                    'ru' => 'Супы',
                    'en' => 'Soups',
                ],
            ],
        ];
        foreach ($objs as $obj) {
            Category::create([
                'name_tm' => $obj['name']['tm'],
                'name_ru' => $obj['name']['ru'],
                'name_en' =>$obj['name']['en'],
                'slug' => str($obj['name']['tm'])->slug(),
            ]);
        }
    }
}
