<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            ['team1_id' => 1, 'team2_id' => 2, 'team1_score' => 2, 'team2_score' => 1, 'field' => 'Field 1', 'referee_id' => 3, 'time' => now()],
            ['team1_id' => 1, 'team2_id' => 2, 'team1_score' => 2, 'team2_score' => 1, 'field' => 'Field 1', 'referee_id' => 3, 'time' => now()],
            // Add more games as needed
        ]);
    }
}
