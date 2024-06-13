<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goals')->insert([
            ['player_id' => 1, 'team_id' => 1, 'match_id' => 1, 'time' => now()],
            ['player_id' => 1, 'team_id' => 1, 'match_id' => 1, 'time' => now()],
            // Add more goals as needed
        ]);
    }
}
