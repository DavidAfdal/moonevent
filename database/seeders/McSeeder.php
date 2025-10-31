<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class McSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_c_s')->insert([
    [
        'mc_name' => 'MC Andi',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'mc_name' => 'MC Budi',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
