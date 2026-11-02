<?php

namespace Database\Seeders;

use App\Models\Abouts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Abouts::create([
            'aboutUsDesc' => ' We specialize in professional sound system installation services. With over 10 years of experience, we provide planning, installation, for a wide range of settings—from local events, nightclubs, and cafes.'
        ]);
    }
}
