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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entertainment_name' => 'DJ Performance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'entertainment_name' => 'Traditional Dance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
