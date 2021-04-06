<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
                'name'=>'Realme 10T',
                'price'=>'500',
                'category'=>'phone',
                'description'=>'A smartphone created by Realme',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtD98xRUWpdoaJGTKCW-Pkyl8L4EAND8psNQ&usqp=CAU'
            ],
            [
                'name'=>'ROG Phone',
                'price'=>'520',
                'category'=>'phone',
                'description'=>'ROG stronghold gaming phone',
                'gallery'=>'https://cdn.mos.cms.futurecdn.net/W5jwefQp9PTzaZHuqqNqB.jpg'
            ],
            [
                'name'=>'Xiaomi Smart TV',
                'price'=>'250',
                'category'=>'television',
                'description'=>'Smart TV created By Xiaomi in year 2019',
                'gallery'=>'https://www.powerplanetonline.com/cdnassets/xiaomi_mi_tv_4s_v53r_55_4k_ultrahd_smart_tv_android_os_led_01_l.jpg'
            ],
            [
                'name'=>'Realme Airdots',
                'price'=>'100',
                'category'=>'audio',
                'description'=>'First bluetooth earphone made by realme',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSRMo3ALpy5iYdIFHUotluxU6Q5ucDSvE9Qw&usqp=CAU'
            ]]
        );
    }
}
