@extends('layouts.master')
@section('title')
    One team
@endsection

@section('content')
        <h2 class="bg-info">{{$team->name}}</h2>
        <h2>{{$team->email}}</h2>
        <h2>{{$team->adress}}</h2>
        <h2>{{$team->city}}</h2>

        <h2>Players:</h2>
        <ul>
        @foreach($team->players as $player)
            <li><a href=" {{ route('single-player', ['id'=>$player->id]) }} ">{{$player->first_name}} {{$player->last_name}}</a></li>
        @endforeach
        <ul>

        <h1></h1><hr>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach($team->comments as $comment)
                <li>
                    <p>
                    Author: {{ $comment->user->name}}
                    </p>
                    <p>
                        {{ $comment->content }}
                    </p>
                </li>
            @endforeach
        </ul>

        <h4>Post a comment</h4>
    <form method="POST" action="{{ route('comments-team', ['team_id' => $team->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Comment:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


@endsection