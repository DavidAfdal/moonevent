<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('photographies')->insert([
    [
        'photography_name' => 'Wedding Photography',
        'icon' => 'photo1.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'photography_name' => 'Outdoor Photography',
        'icon' => 'photo2.png',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
