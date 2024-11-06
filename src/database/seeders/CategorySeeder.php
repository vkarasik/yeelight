<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Светильники',
                'title' => 'Потолочные светильники',
                'slug' => '#',
            ],
            [
                'name' => 'Прикроватные',
                'title' => 'Прикроватные лампы и ночники',
                'slug' => '#',
            ],
            [
                'name' => 'Настольные',
                'title' => 'Настольные лампы',
                'slug' => '#',
            ],
            [
                'name' => 'Умный дом',
                'title' => 'Умный дом',
                'slug' => '#',
            ],
        ]);
    }
}
