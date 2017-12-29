<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbiddenComment');
    }
    
    public function store($teamId)
    {
        $team = Team::find($teamId);

        Comment::create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $teamId,
        ]);

        return redirect()->route('single-team', ['id' => $teamId]);
    }
}
