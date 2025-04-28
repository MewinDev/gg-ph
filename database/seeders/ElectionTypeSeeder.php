<?php

namespace Database\Seeders;

use App\Models\ElectionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'national',
            'local',
            'barangay',
            'SK (sangguniang kabataan)',
            'partylist'
        ];

        foreach ($types as $type) {
            ElectionType::factory()->type($type)->create();
        }
    }
}
