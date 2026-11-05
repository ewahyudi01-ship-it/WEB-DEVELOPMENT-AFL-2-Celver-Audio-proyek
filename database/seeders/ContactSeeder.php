<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'whatsapp' => '+62 812-3917-7199',
            'gmail' => 'celveraudio@pm.me',
            'lokasi' => 'Kuta Bali, Indonesia',
        ]);
    }
}
