<?php

namespace Database\Seeders;

use Database\Seeders\ElectionTypeSeeder;
use Database\Seeders\PositionSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ElectionTypeSeeder::class,
            PositionSeeder::class,
        ]);
    }

}
