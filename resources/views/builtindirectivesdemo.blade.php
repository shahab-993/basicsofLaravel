<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<div class="container mt-5">
    <h1>Welcome, {{ $data['name'] }}</h1>

    <div class="bg-info p-2 mt-1">
        @if ($data['loggedIn'])
            <h1> Hi {{ $data['name'] }}!, Your are logged in Currently!</h1>
        @else
        <h1>You are browsing our site as a Guest!</h1>
        @endif
    </div>
    <div class="bg-info p-2 mt-1">
        @if ($data['name']=='Ahmad khan shahab')
            <h1 class="bg-info p-2 mt-1">
                Hey {{ $data['name'] }}! You are part of our elite players list!
            </h1>
        @endif
    </div>


</div>
</body>
</html>
