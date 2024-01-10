<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
            ],
        ];
         foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
