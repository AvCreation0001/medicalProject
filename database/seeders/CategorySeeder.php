<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
            ['name' => 'Medicines'],
            ['name' => 'Supplements'],
            ['name' => 'Personal Care'],
            ['name' => 'Wellness'],
            ['name' => 'First Aid'],
        ]);
    }
}
