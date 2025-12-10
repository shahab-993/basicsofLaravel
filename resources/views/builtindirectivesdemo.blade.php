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
            @if ($data['name'] == 'Ahmad khan shahab')
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}! You are part of our elite players list!
                </h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if ($data['name'] != 'Ahmad khan shahab')
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}! You are not part of our elite players list!
                </h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if ($data['workExperience'] > 10 && $data['workExperience'] < 20)
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}! You are eligible for the post of Senior Developer!
                </h1>
            @else
                <h1>Hi {{ $data['name'] }}! You are not eligible for the post of Senior Developer!</h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if ($data['countryCode'] == 'IN' || $data['countryCode'] == 'US')
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}! Job Market is doing good in these 2 countries at this moment!
                </h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if (is_null($data['stateCode']))
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}! Please supply a value for StateCode!
                </h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if (!is_null($data['stateCode']))
                <h1 class="bg-info p-2 mt-1">
                    Hey {{ $data['name'] }}!State code is having a value!
                </h1>
            @endif
        </div>
        <div class="bg-info p-2 mt-1">
            @if ($data['countryCode'] == 'US')
                <h1> Country Code is USD </h1>
            @elseif ($data['countryCode'] == 'UK')
                <h1> Country Code is GBP </h1>
            @elseif ($data['countryCode'] == 'IN')
                <h1> Country Code is INR </h1>
            @elseif ($data['countryCode'] == 'AUS')
                <h1> Country Code is AUD </h1>
            @else
                <h1>Invalid Country Code..</h1>
            @endif
        </div>

        <div class="bg-info p-2 mt-1">
            @switch($data['countryCode'])
                @case("US")
                    <h1> Country Code is USD </h1>
                    @break
                @case("UK")
                    <h1> Country Code is BGP </h1>
                    @break
                @case("IN")
                    <h1> Country Code is INR </h1>
                    @break
                @case("AUS")
                    <h1> Country Code is AUD </h1>
                    @break
                @default
                <h1>Invalid Country Code..</h1>

            @endswitch
        </div>

    </div>
</body>

</html>
