<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Show Player</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Player</h1>
        <p>{{ $player->name }}, {{ $player->country }}, {{ $player->sport }}</p>
    </div>
    <div class="container mt-5">
        <ul>
            @foreach ($players as $player)
                {{-- <li>{{ $player->name }}, {{ $player->country }}, {{ $player->sport }}</li> --}}
                @include('partials.displayplayer',['player'=>$player])
            @endforeach
        </ul>
        <table class="table  ">
            <thead>
                <tr>
                <td>Name</td>
                <td>Country</td>
                <td>Sport</td>
            </tr>
            <tbody>
                @foreach ($players as $player )
                {{-- <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->country}}</td>
                    <td>{{ $player->sport}}</td>
                </tr> --}}
                @include('partials.showplayer',['player'=>$player])

                @endforeach
            </tbody>
            </thead>
        </table>
    </div>
</body>

</html>
