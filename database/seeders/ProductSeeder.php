<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Paracetamol',
                'price' => '2.50',
                'mrp' => '3.00',
                'image' => 'paracetamol.jpg',
                'desc' => 'Used to treat pain and fever.',
                'expire_date'=>'12-03-2025'
            ],
            [
                'category_id' => 1,
                'name' => 'Ibuprofen',
                'price' => '3.00',
                'mrp' => '4.00',
                'image' => 'ibuprofen.jpg',
                'desc' => 'Non-steroidal anti-inflammatory drug.',
                'expire_date'=>'12-03-2025'

            ],
            [
                'category_id' => 2,
                'name' => 'Vitamin C',
                'price' => '5.00',
                'mrp' => '6.00',
                'image' => 'vitamin_c.jpg',
                'desc' => 'Boosts immune health.',
                'expire_date'=>'12-03-2025'
            ],
            // Add more products as needed
        ]);
    }
}
