<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::create([
            'title' => 'Installation',
            'description' => 'Sound system installation for local-level events. Personalized Tailored sound system configuration according to specialized experience of clubs/cafes/restaurant/etc.',
            'image' => 'gambar_layanan3.jpeg',
        ]);

        Layanan::create([
            'title' => 'Calibration & Tuning',
            'description' => 'Checking the sound system to ensure high quality sounds produce. Configures simple to complex audio software, architecting acoustic layout, procure best quality/value audio equipment',
            'image' => 'gambar_layanan2.jpeg',
        ]);
    }
}
