<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'title' => 'Светильники',
                'slug' => '#',
                'heading' => 'Потолочные светильники',
            ],
            [
                'title' => 'Прикроватные',
                'slug' => '#',
                'heading' => 'Прикроватные лампы и ночники',
            ],
            [
                'title' => 'Настольные',
                'slug' => '#',
                'heading' => 'Настольные лампы',
            ],
            [
                'title' => 'Умный дом',
                'slug' => '#',
                'heading' => 'Умный дом',
            ],
        ]);

        DB::table('menus')->insert(
            [
                [
                    'title' => 'LED Ceiling Light',
                    'slug' => 'luna',
                    'thumbnail' => 'luna_thumbnail.jpg',
                    'heading' => 'LED Ceiling Light — потолочный светильник',
                    'parent_id' => 1
                ],
                [
                    'title' => 'LED Ceiling Light Kids',
                    'slug' => 'kids',
                    'thumbnail' => 'kids_thumbnail.jpg',
                    'heading' => 'LED Ceiling Light (для детской)',
                    'parent_id' => 1
                ],
                [
                    'title' => 'LED Ceiling Light Galaxy',
                    'slug' => 'galaxy',
                    'thumbnail' => 'luna_650_thumbnail.jpg',
                    'heading' => 'LED Ceiling Light Galaxy — светильник со звездами',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Crystal Ceiling Light Pro',
                    'slug' => 'nox-pro',
                    'thumbnail' => 'nox_thumbnail.jpg',
                    'heading' => 'Crystal Ceiling Light Pro',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Crystal Ceiling Light Plus',
                    'slug' => 'nox-plus',
                    'thumbnail' => 'nox-plus_thumbnail.jpg',
                    'heading' => 'Crystal Ceiling Light Plus',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Crystal Ceiling Light Mini',
                    'slug' => 'nox-mini',
                    'thumbnail' => 'nox-mini_thumbnail.jpg',
                    'heading' => 'Crystal Ceiling Light Mini — светильник с датчиком движения',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Crystal Ceiling Light Round',
                    'slug' => 'nox-round',
                    'thumbnail' => 'nox-round_thumbnail.jpg',
                    'heading' => 'Crystal Ceiling Light Round Diamond',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Yilai Lotus Ceiling Light',
                    'slug' => 'yilai-lotus',
                    'thumbnail' => 'lotus-round_thumbnail.jpg',
                    'heading' => 'Yilai Lotus Ceiling Light',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Yilai Snow Ceiling Light',
                    'slug' => 'yilai-snow',
                    'thumbnail' => 'snow_thumbnail.jpg',
                    'heading' => 'Yilai Snow Ceiling Light',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Yeelight Pendant',
                    'slug' => 'pendant',
                    'thumbnail' => 'pendant_thumbnail.jpg',
                    'heading' => 'Pendant Light — Подвесной светильник',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Ceiling Light Embedded',
                    'slug' => 'embedded',
                    'thumbnail' => 'embedded_thumbnail.jpg',
                    'heading' => 'Embedded Ceiling Light — Встраиваемый светильник',
                    'parent_id' => 1
                ],
                [
                    'title' => 'Ambient Candela',
                    'slug' => 'candela',
                    'thumbnail' => 'candella_thumbnail.jpg',
                    'heading' => 'Ambient Lamp Candela — Интерьерная свеча',
                    'parent_id' => 2
                ],
                [
                    'title' => 'Mi Beside Lamp',
                    'slug' => 'beside',
                    'thumbnail' => 'beside_thumbnail.jpg',
                    'heading' => 'Mi Beside Lamp — Прикроватный светильник',
                    'parent_id' => 2
                ],
                [
                    'title' => 'Motion Sensor Night Lights',
                    'slug' => 'motion-sensor-nightlight',
                    'thumbnail' => 'msnl2_thumbnail.jpg',
                    'heading' => 'Mi Motion Sensor Night Light — Прикроватный светильник',
                    'parent_id' => 2
                ],
                [
                    'title' => 'Motion Sensor Closet Light',
                    'slug' => 'motion-sensor-closet',
                    'thumbnail' => 'closet_thumbnail.jpg',
                    'heading' => 'Motion Sensor Closet Light — светильник для шкафа',
                    'parent_id' => 2
                ],
                [
                    'title' => 'Wireless Charge Nightlight',
                    'slug' => 'wireless-charge-nightlight',
                    'thumbnail' => 'wireless-charge_thumbnail.jpg',
                    'heading' => 'Wireless Charge Nightlight — ночник-зарядка',
                    'parent_id' => 2
                ],
                [
                    'title' => 'LED Smart Desk',
                    'slug' => 'desk',
                    'thumbnail' => 'desktop_thumbnail.jpg',
                    'heading' => 'LED Smart Table Lamp — Умная настольная лампа',
                    'parent_id' => 3
                ],
                [
                    'title' => 'LED Table Lamp',
                    'slug' => 'table-led-light',
                    'thumbnail' => 'table_thumbnail.jpg',
                    'heading' => 'Mi LED Desk Lamp — Настольная лампа',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Serene Eye-Friendly',
                    'slug' => 'muse',
                    'thumbnail' => 'muse_thumbnail.jpg',
                    'heading' => 'Serene Eye-Friendly — Настольная лампа',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Wireless Charge Nightlight',
                    'slug' => 'wireless-charge-nightlight',
                    'thumbnail' => 'wireless-charge_thumbnail.jpg',
                    'heading' => 'Wireless Charge Nightlight — ночник-зарядка',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Sensor Makeup Mirror',
                    'slug' => 'mirror',
                    'thumbnail' => 'mirror_thumbnail.jpg',
                    'heading' => 'Sensor Makeup Mirror — зеркало с подсветкой',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Folding Desk Lamp',
                    'slug' => 'folding',
                    'thumbnail' => 'folding_thumbnail.jpg',
                    'heading' => 'Folding Desk Lamp — складная настольная лампа',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Folding Lamp Z1 Pro',
                    'slug' => 'folding-z1-pro',
                    'thumbnail' => 'z1_thumbnail.jpg',
                    'heading' => 'Folding Z1 Pro — настольная лампа',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Desk Clamp Lamp J1',
                    'slug' => 'clamp',
                    'thumbnail' => 'clamp_thumbnail.jpg',
                    'heading' => 'Desk Clamp Lamp J1 — лампа с зажимом',
                    'parent_id' => 3
                ],
                [
                    'title' => 'Smart Curtain Motor',
                    'slug' => 'curtain-motor',
                    'thumbnail' => 'curtain_thumbnail.jpg',
                    'heading' => 'Yeelight Smart Curtain — умный карниз',
                    'parent_id' => 4
                ],
            ]
        );
    }
}
