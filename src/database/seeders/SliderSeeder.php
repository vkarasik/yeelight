<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                "title" => "Умная настольная лампа",
                "subtitle" => "Свет — начало для творчества",
                "link" => "/desk",
                "img" => "/assets/img/slider/banner_desktop.jpg",
                "css" => "color: #fff;"
            ],
            [
                "title" => "Светодиодный потолочный светильник",
                "subtitle" => "Свет о котором вы мечтали",
                "link" => "/luna",
                "img" => "/assets/img/slider/banner_ceiling.jpg",
                "css" => "color: #333; text-align: center;"
            ],
            [
                "title" => "Интерьерная свеча",
                "subtitle" => "Разожги свечу одним поворотом",
                "link" => "/candela",
                "img" => "/assets/img/slider/banner_candela.jpg",
                "css" => "color: #333; text-align: center;"
            ],
            [
                "title" => "Зеркало с подсветкой",
                "subtitle" => "Свет для создания идеального макияжа",
                "link" => "/mirror",
                "img" => "/assets/img/slider/banner_mirror.jpg",
                "css" => "color: #333;"
            ],
            [
                "title" => "Привет, Алиса!",
                "subtitle" => "Теперь вы можете управлять светом Yeelight c помощью ЯндексАлисы",
                "link" => "https://yandex.ru/alice/smart-home",
                "img" => "/assets/img/slider/banner_alice.jpg",
                "css" => "color: #fff; text-align: left;"
            ]
        ]);
    }
}
