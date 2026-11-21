<?php

namespace Database\Seeders;

use App\Models\testing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       testing::create([
            'brands' => 'LOQ',
            'model' => 'Ryzen 5',
            'processor' => 'Lenovo',
            'ram' => 'Amda',
        ]); 
    }
}
