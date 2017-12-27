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
@endsection