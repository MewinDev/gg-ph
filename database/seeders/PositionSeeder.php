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
            'presidential' => 'president',
            'vice presidential' => 'vice_president',
            'senatorial' => 'senator',
        ];

        foreach ($positions as $position => $position_code) {
            Position::factory()->positions($position, $position_code)->create();
        }
    }
}
