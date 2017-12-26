<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Player;

class PlayersController extends Controller
{
    public function index($id)
    {
        $player=Player::find($id);
        return view('players', compact('player'));
    }
}
