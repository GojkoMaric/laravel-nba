<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function store($teamId)
    {
        $team = Team::find($teamId);

        $team->comments()->create(request()->all());

        Comment::create([
            'content' => request('content'),
            'user_id' => Auth()->user()->id,
            'team_id' => $teamId,
        ]);

        return redirect()->route('single-team', ['id' => $teamId]);
    }
}
