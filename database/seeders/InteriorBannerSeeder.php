<?php

namespace Database\Seeders;

use App\Models\InteriorBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteriorBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InteriorBanner::create([
            'image' => 'lookOut-space.png',
        ]);
    }
}
