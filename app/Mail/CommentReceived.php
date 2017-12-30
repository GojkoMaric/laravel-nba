<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Comment;
use App\Team;

class CommentReceived extends Mailable
{
    public $user;
    public $comment;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Team $team, Comment $comment)
    {
        $this->team=$team;
        $this->comment=$comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $team = $this->team;
        $comment = $this->comment;

        return $this->view('emails.comment-received', compact('team', 'comment'));
    }
}
