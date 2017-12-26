<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Teams</title>

    </head>
    <body>
        <h1>One Player</h1>

        <h2>{{ $player->first_name }}</h2>
        <h2>{{ $player->last_name }}</h2>
        <h2>{{ $player->email }}</h2>
        <h2>Team:</h2>
        <h2><a href="
        {{ route('single-team', ['id'=>$player->team->id]) }}
        ">{{ $player->team->name }}</a></h2>

        <h3>Player's Team</h3>

    </body>
</html>