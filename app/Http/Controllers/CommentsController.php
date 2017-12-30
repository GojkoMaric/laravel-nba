<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbiddenComment');
    }
    
    public function store($teamId)
    {
        $team = Team::find($teamId);

        $comment = Comment::create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $teamId,
        ]);

        Mail::to($team->email)->send(new CommentReceived($team, $comment));

        return redirect()->route('single-team', ['id' => $teamId]);
    }

    public function forbidden()
    {
        return view('forbidden-comment');
    }
}
