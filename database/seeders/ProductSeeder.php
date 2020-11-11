<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'name'=>'MI Mobile',
                'price'=>'20000',
                'category'=>'Smartphone',
                'gallery'=>'http://devgeeksourav.com/img/MI-mobile.jpg',
                'description'=>'RAM 4GB, ROM 128GB with many exciting features.'
            ],
            [
                'name'=>'HP Envy 360',
                'price'=>'89900',
                'category'=>'Laptop',
                'gallery'=>'http://devgeeksourav.com/img/hp-envy-x360.jpg',
                'description'=>'RAM 12GB, 1TB SSD with many exciting features.'
            ],
            [
                'name'=>'Sony Home Theater',
                'price'=>'31000',
                'category'=>'Home Theater',
                'gallery'=>'http://devgeeksourav.com/img/giant_51642.jpeg',
                'description'=>'Soothing sound with many exciting features.'
            ],
            [
                'name'=>'Electric Guitar',
                'price'=>'35000',
                'category'=>'Electric Guitar',
                'gallery'=>'http://devgeeksourav.com/img/guitar.jpg',
                'description'=>'Lorem Ipsum Doler Simet.'
            ]
        ]);
    }
}
