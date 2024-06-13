<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class TeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            ['name' => 'Team A', 'points' => 10, 'creator_id' => 1],
            ['name' => 'Team B', 'points' => 8, 'creator_id' => 2],
            // Add more teams as needed
        ]);
    }
}
