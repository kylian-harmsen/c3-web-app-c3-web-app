<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all(); // Assuming you have a 'creator' relationship in your Team model

        return view('teams', compact('teams'));
    }
}
