<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'senator' => '1',
            'mayor' => '2',
            'vice mayor' => '2',
            'congressman' => '2',
            'councilor' => '2',
            'barangay captain' => '3',
            'barangay kagawad' => '3',
            'SK chairperson' => '4',
            'SK kagawad' => '4',
            'representative' => '5',
        ];

        foreach ($positions as $position => $type_id) {
            Position::factory()->positions($position, $type_id)->create();
        }
    }
}
