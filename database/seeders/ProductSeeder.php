<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Burger',
                'image' => 'assets/images/burger.jpg',
                'price' => 10000,
                'description' => 'lorem ipsum dolor sit amet, consectet'
            ],
            [
                'name' => 'Waffle',
                'image' => 'assets/images/waffle.jpg',
                'price' => 10000,
                'description' => 'lorem ipsum dolor sit amet, consectet'
            ],
            [
                'name' => 'Nasi Goreng',
                'image' => 'assets/images/fried-rice.jpg',
                'price' => 10000,
                'description' => 'lorem ipsum dolor sit amet, consectet'
            ],
            [
                'name' => 'Pempek',
                'image' => 'assets/images/pempek.jpg',
                'price' => 10000,
                'description' => 'lorem ipsum dolor sit amet, consectet'
            ],
        ];

        foreach ( $products as $key=>$value) {
            Product::create($value);
        }
    }
}
