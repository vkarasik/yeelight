<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            [
                'address' => 'ул. Бобруйская, д. 6, ст. м. «Площадь Ленина» (1 этаж, возле главного входа) (ТРЦ "Galileo")',
                'lat' => '53.890224',
                'lon' => '27.554375',
                'phone' => '',
                'schedule' => '',
                'shop_id' => 1,
            ],
            [
                'address' => 'Партизанский пр-т, д. 150А, ст. м. «Могилевская» (2 этаж, остров)',
                'lat' => '53.859605',
                'lon' => '27.674022',
                'phone' => '',
                'schedule' => '',
                'shop_id' => 1,
            ],
            [
                'address' => 'улица Ленина, 27, павильон 46 (шоу-рум)',
                'lat' => '53.888887',
                'lon' => '27.580552',
                'phone' => '+375 (29) 602-33-11, +375 (29) 364-26-97',
                'schedule' => 'ежедневно с 10:00 до 20:00 без перерыва',
                'shop_id' => 2,
            ],
            [
                'address' => 'улица Кедышко, 24 (магазин-склад)',
                'lat' => '53.933439',
                'lon' => '27.632295',
                'phone' => '+375 (29) 603-01-43',
                'schedule' => 'понедельник - пятница с 08:30 до 18:00 без перерыва. Выходной: суббота, воскресенье',
                'shop_id' => 2,
            ],
            [
                'address' => 'Победителей проспект, 9',
                'lat' => '53.908554',
                'lon' => '27.548599',
                'phone' => '',
                'schedule' => '',
                'shop_id' => 3,
            ],
        ]);
    }
}
