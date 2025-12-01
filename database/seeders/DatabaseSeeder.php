<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        ShieldSeeder::class,  
        CateringSeeder::class,
        DecorationSeeder::class,
        PhotographySeeder::class,
        McSeeder::class,
        EntertainmentSeeder::class,
        MuaSeeder::class,
        CategorySeeder::class
    ]);
    }
}
