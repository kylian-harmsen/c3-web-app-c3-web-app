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
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $newTeam = new Team();

        $newTeam->name = $request->name;
        $newTeam->points = $request->points;
        $newTeam->creator_id = $request->creator_id;
        $newTeam->save();

        return redirect()->route('teams');
    }
}
