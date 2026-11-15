<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venue::create([
            'titlePlace' => 'BEACH CLUB',
            'descriptionPlace' => '',
            'image' => '5_image.jpeg',
        ]);

        Venue::create([
            'titlePlace' => 'BAR',
            'descriptionPlace' => '',
            'image' => '6_image.jpeg',
        ]);

        Venue::create([
            'titlePlace' => 'RESTAURANT',
            'descriptionPlace' => '',
            'image' => '7_image.jpeg',
        ]);
    }
}
