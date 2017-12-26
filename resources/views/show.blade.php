<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Teams</title>

    </head>
    <body>
        <h1>One team</h1>

        <h2>{{$team->name}}</h2>
        <h2>{{$team->email}}</h2>
        <h2>{{$team->adress}}</h2>
        <h2>{{$team->city}}</h2>

        <h2>Players:</h2>
        <ul>
        @foreach($team->players as $player)
            <li><a href=" {{ route('single-player', ['id'=>$player->id]) }} ">{{$player->first_name}} {{$player->last_name}}</a></li>
        @endforeach
        <ul>
    </body>
</html>