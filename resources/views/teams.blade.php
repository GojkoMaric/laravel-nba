@extends('layouts.master')
@section('title')
    All Teams
@endsection

@section('content')

        @foreach($teams as $team)
            <h3><a href=" {{ route('single-team', ['id' =>$team->id]) }} ">{{$team->name}}</a></h3>
        @endforeach


@endsection
