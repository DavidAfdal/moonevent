<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntertainmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entertainments')->insert([
            [
                'entertainment_name' => 'Live Band',
                'icon' => 'band.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entertainment_name' => 'DJ Performance',
                'icon' => 'dj.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entertainment_name' => 'Traditional Dance',
                'icon' => 'dance.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
