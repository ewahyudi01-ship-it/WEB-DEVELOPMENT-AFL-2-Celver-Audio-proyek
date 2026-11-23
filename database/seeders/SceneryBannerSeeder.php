<?php

namespace Database\Seeders;

use App\Models\SceneryBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SceneryBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SceneryBanner::create([
            'image' => 'Banner_Speacer_V2.jpeg',
        ]);
    }
}
