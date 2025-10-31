<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Wedding',
                'slug' => \Illuminate\Support\Str::slug('Wedding'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Building Rental',
                'slug' => \Illuminate\Support\Str::slug('Building Rental'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Event Package',
                'slug' => \Illuminate\Support\Str::slug('Event Package'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
