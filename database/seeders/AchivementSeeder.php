<?php

namespace Database\Seeders;

use App\Models\Achivement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchivementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Achivement::create([
            'titleDesc' => '10+',
            'subTitleDesc' => 'Years of Experience',
            'desc' => 'Professional sound system installation services for nightclubs, weddings, and live music cafes.'
        ]);

        Achivement::create([
            'titleDesc' => '3+',
            'subTitleDesc' => 'Trusted for High-Stakes Events',
            'desc' => 'A key portfolio project involving the design of a sound system for one of the largest clubs.'
        ]);

        Achivement::create([
            'titleDesc' => 'Efficiency & Quality',
            'subTitleDesc' => '',
            'desc' => 'Expertise in configuring audio systems according to room contours, providing cost-effective solutions.'
        ]);

    }
}
