<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tagline;

class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tagline::create([
            'text' => 'Precision Installation'

        ]);
        Tagline::create([
            'text' => 'Performance'
            
        ]);
        Tagline::create([
            'text' => 'For every moments'
            
        ]);
    }
}
