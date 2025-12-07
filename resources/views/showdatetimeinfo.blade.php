<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

</head>
<body>
<div class="container mt-5">
    <h1  class="text-center"> Server Time is {{ $TodaysDate }}</h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Day</th>
            <th>Month</th>
            <th>year</th>
            <th>Hours</th>
            <th>Minutes</th>
            <th>Seconds</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $TodaysDate->format('d') }}</td>
            <td>{{ $TodaysDate->format('m') }}</td>
            <td>{{ $TodaysDate->format('Y') }}</td>
            <td>{{ $TodaysDate->format('H') }}</td>
            <td>{{ $TodaysDate->format('i') }}</td>
            <td>{{ $TodaysDate->format('s') }}</td>

        </tr>
    </tbody>
</table>
</body>
</html>

