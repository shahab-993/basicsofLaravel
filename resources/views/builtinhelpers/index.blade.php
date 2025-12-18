@php
use App\Filters\CustomFilters as ch;
@endphp
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
    <title>Built In Helper Methods Demo</title>
    <style>
        hr {
            height: 10px;
            widows: 100%;
            background-color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <p>{{ 3 + 2 }}</p>
        <p>{{ $data['ProbationPeriod'] + 2 }}</p>
        <p>{{ $data['FirstName'] . ' ' . $data['LastName'] }}</p>
        <p>Adding String Lists: {{ implode(',', $data['FirstQuarter']) . implode(',', $data['SecondQuarter']) }}</p>
        <p>Adding Integer Lists: {{ implode(',', $data['FQuarter']) . ',' . implode(',', $data['SQuater']) }}</p>

        <p>Add Slashes: {{ addslashes($data['AboutMe']) }}</p>

        <p>CapFirst: {{ ucfirst($data['AboutMe']) }}</p>
        <p>Lower: {{ strtolower($data['AboutMe']) }}</p>
        <p>Upper: {{ strtoupper($data['AboutMe']) }}</p>
        <p>Title: {{ Str::title($data['AboutMe']) }}</p>

        <p>{{ strlen($data['AboutMe']) }}</p>
        <p>{{ Str::limit($data['AboutMe'], 21) }}</p>
        <p>{{ Str::words($data['AboutMe']) }}</p>
        <p>{{ str_word_count($data['AboutMe']) }}</p>

        <p>{{ implode('.', str_split($data['FirstName'])) }}</p>

        <p>Replace :{{ str_replace(' ', '', $data['AboutMe']) }}</p>
        <p>Substing: {{ substr($data['AboutMe'], 5, 9) }}</p>

        <p>{{ number_format($data['PayForFight'], 3) }}</p>
        <hr />

        <p>Now is : {{ now() }}</p>
        <p>Day of Month with leading zeroes: {{ now()->format('d') }}</p>
        <p>Day of Month with without leading zeroes : {{ now()->format('j') }}</p>


        <p>Day of Week : {{ now()->format('D') }}</p>
        <p>Day of Week Full Text : {{ now()->format('l') }}</p>
        <p>Day of Week : {{ now()->dayOfWeek }}</p>


        @php
            $Processors = collect($data['Processors'])->sortBy('cores')->toArray();
        @endphp
        <p>Sorting Collections in Ascending Order</p>
        <ul>
            @foreach ($Processors as $Processor)
                <li>{{ $Processor['name'] }}({{ $Processor['cores'] }})</li>
            @endforeach
        </ul>
        <p>{{ implode('//',array_column($data['Processors'],'name')) }}</p>

        <hr/>
        <p>{{ $data['Message'] }}</p>
        <p>{!! $data['Message'] !!}</p>
        <p>{{ e($data['Message']) }}</p>


        <p>Previose Fight: {{ $data['PreviousFight'] ?? 'Not Availabel' }}</p>
        <p>Next Fight: {{ $data['Nextfight'] ?? 'Not Availabel' }}</p>
        <hr/>
        
    </div>
</body>

</html>
