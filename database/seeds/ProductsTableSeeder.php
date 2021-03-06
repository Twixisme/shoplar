<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'База Komilfo Milky White Base, 15 мл',
                'about' => 'База Komilfo Milky White Base - это уникальная база для гель-лака, которая обеспечивает супер прочное сцепление и позволяет сделать выравнивание ногтевой пластины.',
                'price' => '199',
                'category_id' => 1,
                'image' => 'products/1.1.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo KC Glitter French Base Collection KC001, 8мл',
                'about' => 'База Komilfo KC Glitter French Base – это линейка баз для гель-лака бренда "Komilfo", разработанная совместно с технологом компании "AmoreShop" Ксенией Чумак. Продукты данной серии специально созданы для выполнения французского маникюра.',
                'price' => '125',
                'category_id' => 1,
                'image' => 'products/1.2.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo French Rubber Base 005 Marshmellow, 8 мл',
                'about' => 'База Komilfo French Rubber Base – это уникальная френч-база на каучуковой основе для гель-лака, которая обеспечивает супер прочное сцепление и позволяет сделать выравнивание ногтевой пластины. Идеально подходит для французского маникюра.',
                'price' => '135',
                'category_id' => 1,
                'image' => 'products/1.3.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'База Komilfo French Rubber Base 005 Marshmellow, 30 мл',
                'about' => 'База Komilfo French Rubber Base – это уникальная френч-база на каучуковой основе для гель-лака, которая обеспечивает супер прочное сцепление и позволяет сделать выравнивание ногтевой пластины. Идеально подходит для французского маникюра.',
                'price' => '299',
                'category_id' => 1,
                'image' => 'products/1.5jpg.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo French Rubber Base 002, Baby Lips, 8 мл',
                'about' => 'База Komilfo French Rubber Base – это уникальная френч-база на каучуковой основе для гель-лака, которая обеспечивает супер прочное сцепление и позволяет сделать выравнивание ногтевой пластины. Идеально подходит для французского маникюра.',
                'price' => '135',
                'category_id' => 1,
                'image' => 'products/1.6.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'База Komilfo French Rubber Base 002 Baby Lips, 30 мл',
                'about' => 'База Komilfo French Rubber Base – это уникальная френч-база на каучуковой основе для гель-лака, которая обеспечивает супер прочное сцепление и позволяет сделать выравнивание ногтевой пластины. Идеально подходит для французского маникюра.',
                'price' => '299',
                'category_id' => 1,
                'image' => 'products/1.7.jpg',
                'count' => rand(1, 10),
            ],


            [
                'name' => 'Кисть Komilfo Double Acrylic 6 (Kolinsky)/Gel flat 6 (Nylon)',
                'about' => 'Волокно колонка тонкое и упругое, с мягким длинным кончиком, оно является идеальным материалом для высокопрофессиональных кистей. Колонковые кисти предназаначены для работы с акриловыми и любыми красками, а также для работы акрилом.',
                'price' => '269',
                'category_id' => 2,
                'image' => 'products/2.1.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Кисть Komilfo Double Gel flat 4 (Nylon)/Liner 5 (Nylon)',
                'about' => 'Кисть Komilfo Double Gel flat 4 (Nylon)/Liner 5 (Nylon) – с одной стороны, прямоугольная форма, которая позволяет набирать и выкладывать нужное количество материала на ноготь, а также наносить его тонким слоем. А с другой стороны - это длинная тонкая кисть из синтетического волокна для рисования тонких длинных линий. Кисти из искуcственного материала особенно рекомендуются для акриловых красок и работы с гелем.',
                'price' => '199',
                'category_id' => 2,
                'image' => 'products/2.2.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Кисть Komilfo Double Gel flat 4 (Nylon)/Liner 7 (Nylon)',
                'about' => 'Натуральная колонковая кисть для акрилового дизайна и моделирования с одной стороны, и нейлоновая с другой. Удобная острая форма позволяет делать шарики из акрила, выкладывать материал на ноготь и моделировать форму.',
                'price' => '269',
                'category_id' => 2,
                'image' => 'products/2.3.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Кисть Komilfo Double Acrylic 4 (Kolinsky)/Gel flat 4 (Nylon)',
                'about' => 'Кисть Komilfo Double Acrylic 4 (Kolinsky)/Gel flat 4 (Nylon) — натуральная колонковая кисть для акрилового дизайна и моделирования с одной стороны, и нейлоновая с другой. Удобная острая форма позволяет делать шарики из акрила, выкладывать материал на ноготь и моделировать форму.',
                'price' => '249',
                'category_id' => 2,
                'image' => 'products/2.4.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Силиконовая кисть Komilfo Silicone Brush №1 (пика+скошенная лопатка)',
                'about' => 'Силиконовая кисть Komilfo Silicone Brush №1 (пика+скошенная лопатка)- применяется для моделирования и дизайна 3D, 4D, гелем-пластилином, гелями и акрилом. С их помощью можно создавать как небольшие элементы, так и целые композиции.',
                'price' => '129',
                'category_id' => 2,
                'image' => 'products/2.5.jpg',
                'count' => rand(1, 10),
            ],[
                'name' => 'Кисть YRE Nail Art Brush VK 05, веерная',
                'about' => 'Кисть YRE Nail Art Brush VK 05 имеет ворс в форме веера. При помощи этой кисточки очень легко создавать модный дизайн, используя слюду, чешую, бархат, глиттерные блестки и другой подобный декор. Таким инструментом удобно растушевывать цвета, создавать плавные переходы в градиенте или цветовые растяжки гель-лаком. Ручка изготовлена из пластика, легкая, комфортная, ворс искусственный, закреплен в металлической обойме.',
                'price' => '20',
                'category_id' => 2,
                'image' => 'products/2.6.jpg',
                'count' => rand(1, 10),
            ],

            [
                'name' => 'Машинка для маникюра Marathon 3 Champion (микромотор SDE-H37L1), 35000 об/мин БЕЗ ПЕДАЛИ, белый (гарантия:12 мес.микромотор, 24 мес.блок)',
                'about' => 'Фрезер для маникюра MARATHON Champion-3 – профессиональный универсальный аппарат для маникюра и педикюра, коррекции нарощенных ногтей. Данный фрезер комплектуется ручкой SDE-H37L1. Максимальная скорость вращения фрезы 35 000 оборотов в минуту. Крутящий момент 2,9 Н/см. Мощность 45 Вт.',
                'price' => '4495',
                'category_id' => 3,
                'image' => 'products/3.1.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Машинка для маникюра Marathon 3 Champion (микромотор SDE-H37L1), 35000 об/мин БЕЗ ПЕДАЛИ, черный (гарантия:12 мес.микромотор, 24 мес.блок)',
                'about' => 'Фрезер для маникюра MARATHON Champion-3 – профессиональный универсальный аппарат для маникюра и педикюра, коррекции нарощенных ногтей. Данный фрезер комплектуется ручкой SDE-H37L1. Максимальная скорость вращения фрезы 35 000 оборотов в минуту. Крутящий момент 2,9 Н/см. Мощность 45 Вт.',
                'price' => '4495',
                'category_id' => 3,
                'image' => 'products/3.2.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Машинка для маникюра Marathon Handy 700 (BM50S1), 50000 оборотов/мин (230 Ватт) для маникюра и педикюра',
                'about' => 'Фрезер Marathon Handy 700 (BM50S1)- профессиональный аппарат для маникюра и педикюра, наращивания и коррекции ногтей. Данный фрезер комплектуется ручкой-микродвигателем BM50S1. Максимальная скорость вращения фрезы 50000 оборотов в минуту. Мощность 230 Ватт. Крутящий момент 7,8 Н/см.',
                'price' => '17775',
                'category_id' => 3,
                'image' => 'products/3.3.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Основа для колпачков Кm070_К, диаметр 50 мм',
                'about' => 'Основа для колпачков - одноразовых насадок для педикюра.',
                'price' => '68',
                'category_id' => 3,
                'image' => 'products/3.4.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Насадка алмазная 801/029F, шарик, мягкая насечка',
                'about' => 'Насадка для фрезера алмазная, шарик средний - это насадка (фреза) с алмазным напылением для маникюра и коррекции гелевых ногтей: оппила под ногтями, выпиливания отслоек, обработки кутикулы, удаления мозолей. Насадка подвергается дезинфекции и стерилизации.',
                'price' => '204',
                'category_id' => 3,
                'image' => 'products/3.5.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Набор керамических насадок для фрезера, 6 шт (цвет в ассортименте)',
                'about' => 'Набор керамических насадок для фрезера, 6 шт. В комплект также входит подставка с крышечкой.',
                'price' => '98',
                'category_id' => 3,
                'image' => 'products/3.6.jpg',
                'count' => rand(1, 10),
            ],

            [
                'name' => 'Mayur Масло для ногтей и кутикулы, 15 мл',
                'about' => 'Mayur Масло для ногтей и кутикулы имеет безопасный состав. Натуральные и эфирные масла известны своими восстанавливающими и смягчающими свойствами (оливковое, персиковое, апельсиновое, вербеновое). Масло прекрасно увлажняет кожу вокруг ногтей, делает ее мягкой и нежной, а также служит источником витаминов для укрепления ногтевой пластины. Обладает приятным освежающим апельсиновым ароматом.',
                'price' => '50',
                'category_id' => 4,
                'image' => 'products/4.1.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo Citrus Cuticle Oil - цитрусовое масло для кутикулы, 13 мл',
                'about' => 'Komilfo Citrus Cuticle Oil - цитрусовое масло для кутикулы.',
                'price' => '42',
                'category_id' => 4,
                'image' => 'products/4.2.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo Cuticle Remover Alkaline - ремувер для кутикулы, щелочной, 8 мл',
                'about' => 'Komilfo Cuticle Remover Alkaline – щелочной ремувер для кутикулы, который не пересушивает кожу. Он быстро удаляет кутикулу, имеет в составе мощные активные компоненты.',
                'price' => '29',
                'category_id' => 4,
                'image' => 'products/4.3jpg.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'Komilfo Cuticle Remover Alkaline - ремувер для кутикулы, щелочной, 30 мл',
                'about' => 'Komilfo Cuticle Remover Alkaline – щелочной ремувер для кутикулы, который не пересушивает кожу. Он быстро удаляет кутикулу, имеет в составе мощные активные компоненты.',
                'price' => '39',
                'category_id' => 4,
                'image' => 'products/4.4.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'CND Creative Scentsations Лосьон для рук и тела - Black Cherry & Nutmeg, 245 ml',
                'about' => 'CND Creative Scentsations Лосьон для рук и тела - Black Cherry & Nutmeg - лосьон для рук и тела с ароматом вишни и мускатного ореха.',
                'price' => '209',
                'category_id' => 4,
                'image' => 'products/4.5.jpg',
                'count' => rand(1, 10),
            ],
            [
                'name' => 'CND Creative Scentsations Лосьон для рук и тела - Citrus & Green Tea, 245 ml',
                'about' => 'CND Creative Scentsations Лосьон для рук и тела - Citrus & Green Tea - лосьон для рук и тела с ароматом лимона и зеленого чая.',
                'price' => '209',
                'category_id' => 4,
                'image' => 'products/4.6.jpg',
                'count' => rand(1, 10),
            ],

        ]);
    }
}
