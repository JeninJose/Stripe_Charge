<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([
            [
                'name' => 'SAMSUNG Galaxy',
                'price' => '35000',
                'description' => 'Transform your binge game-playing sessions into an enthralling ones with the Samsung Galaxy A53 smartphone. This phone features an FHD+ Super AMOLED display with an expanded 16.40 cm (6.5) Infinity-O display that ensures immersive visuals and a smooth browsing experience. Also, this mobile phone comes with an efficient 5000 mAh battery so that you can stay entertained throughout the day. ',
            ],
            [
                'name' => 'Washing Machine',
                'price' => '31000',
                'description' => 'You can finish your laundry right away thanks to the many wonderful features of this LG 8 kg Fully Automatic Front Load Washing Machine. With its amazing AI Direct Drive technology, this LG 8 kg Fully Automatic Front Load Washing Machine attempts to give those clothes a desirable wash by understanding not only the weight of the clothes being washed but also sensing the gentleness of the fabric.',
            ],
            [
                'name' => 'Geared cycle',
                'price' => '16900',
                'description' => 'CAYA Bikes was founded to give everyone a better experience of cycling and the changes we have made in bicycles have been revolutionary. CAYA Bikes founding mission was to kickstart a revolution in children?s adults cycling.',
            ],
            [
                'name' => 'Monitor',
                'price' => '7999',
                'description' => 'The Lenovo 60.45 cm (23.8) Full HD VA Panel (D24-20) monitor is equipped with AMD FreeSync technology which eliminates gaming roadblocks, such as motion blur and input lags, to facilitate an amazing gaming experience.',
            ],
            [
                'name' => 'Sofa',
                'price' => '41600',
                'description' => 'The high backrest lets you rest your shoulder and head, eliminating any kind of discomfort. You can now binge watch all-day without the fear of back pain.',
            ]
        ]);
    }
}