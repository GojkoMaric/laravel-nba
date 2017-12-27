@extends('layouts.master')
@section('title')
    One player
@endsection

@section('content')


        <h2>{{ $player->first_name }}</h2>
        <h2>{{ $player->last_name }}</h2>
        <h2>{{ $player->email }}</h2>
        <h2>Team:</h2>
        <h2><a href="
        {{ route('single-team', ['id'=>$player->team->id]) }}
        ">{{ $player->team->name }}</a></h2>
        @endsection