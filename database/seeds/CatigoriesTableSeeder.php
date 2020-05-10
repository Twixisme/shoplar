<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatigoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Гель-лаки',
                'code' => 'gel-laki',
                'logo' => 'categories/1.jpg'
            ],
            [
                'name' => 'Материалы для маникюра',
                'code' => 'for-man',
                'logo' => 'categories/2.jpg'
            ],
            [
                'name' => 'Фрезы и насадки',
                'code' => 'frez',
                'logo' => 'categories/3.jpg'
            ],
            [
                'name' => 'Лосьоны, масла, ремуверы, скрабы, СПА-свечи',
                'code' => 'los-mas',
                'logo' => 'categories/4.jpg'
            ],
            [
                'name' => 'Шампуни, маски, уход',
                'code' => 'sham',
                'logo' => 'categories/5.jpg'
            ],
            [
                'name' => 'Уход для лица',
                'code' => 'ton',
                'logo' => 'categories/6.jpg'
            ],
            [
                'name' => 'Уход для рук',
                'code' => 'h',
                'logo' => 'categories/7.jpg'
            ],
            [
                'name' => 'Макияж',
                'code' => 'mak',
                'logo' => 'categories/.jpg'
            ]
        ]);
    }
}
