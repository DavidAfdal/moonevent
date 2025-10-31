<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('decorations')->insert([
    [
        'decoration_name' => 'Elegant Decoration',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'decoration_name' => 'Classic Theme',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
