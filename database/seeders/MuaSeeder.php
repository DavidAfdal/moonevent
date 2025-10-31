<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_u_a_s')->insert([
            [
                'mua_name' => 'Glamour Bride MUA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mua_name' => 'Natural Look MUA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mua_name' => 'Traditional Wedding MUA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
