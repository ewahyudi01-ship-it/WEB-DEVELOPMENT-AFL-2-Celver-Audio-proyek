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
            'titlePlace' => 'Cafe',
            'descriptionPlace' => 'Checking the sound system to ensure high quality sounds produce. Configures simple to complex audio software, architecting acoustic layout, procure best quality/value audio equipment',
            'image' => 'gambar_layanan2.jpeg',
        ]);
    }
}
