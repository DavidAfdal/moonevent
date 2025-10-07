<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('venues')->insert([
            [
                'venue_name' => 'Grand Ballroom Hotel',
                'icon' => 'venue1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'venue_name' => 'Outdoor Garden Venue',
                'icon' => 'venue2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'venue_name' => 'Beachfront Venue',
                'icon' => 'venue3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
