<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CateringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('caterings')->insert([
            [
                'catering_name' => 'Delicious Catering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'catering_name' => 'Luxury Foods',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
