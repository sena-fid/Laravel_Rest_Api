<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $products = ['product1', 'product2', 'product3', 'product4', 'product5', 'product6'];
        foreach ($products as $product) {
            Product::create([
                'product_no' => rand(10000, 99999),
                'title' => $product,
                'description' => 'Lorem ipsum dolor sit amet',
                'serial_no' => rand(10000, 99999),
                'barcode_no' => rand(10000, 99999),
            ]);
        }


    }
}
