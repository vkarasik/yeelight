<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert(
            [
                [
                    'name' => 'XiStore',
                    'title' => 'Широкий выбор товаров Xiaomi',
                    'logo' => 'assets/img/shops/logo-xistore(185x80).png',
                    'url' => 'https://xistore.by/search/?how=r&q=yeelight&where=iblock_1c_catalog',
                ],
                [
                    'name' => 'Светилкин',
                    'title' => 'Светотехнический магазин',
                    'logo' => 'assets/img/shops/logo-svetilkin(185x80).png',
                    'url' => 'http://svetilkin.by/product/?f_in=product_search_form&_ia=&_iap=&search_product_name=xiaomi&search.x=14&search.y=10&_it_fs=g',
                ],
                [
                    'name' => '5 Элемент',
                    'title' => 'Сеть магазинов электроники',
                    'logo' => 'assets/img/shops/logo-patio(185x80).png',
                    'url' => 'https://5element.by/search/?q=yeelight&tab=products',
                ],
            ]
        );
    }
}
