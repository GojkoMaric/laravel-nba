<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Team;
use \App\Comment;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//ne pusta neulogovane
    }

    public function index()
    {
        $teams = Team::all();
        return view('teams', compact(['teams']));
    }

    public function show($id)
    {
        $team = Team::with(['players', 'comments'])->find($id);
        return view('teams.show', compact(['team']));
    }
}
