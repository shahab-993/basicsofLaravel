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
    <table class="table">
        <thead>
            <tr>
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Quantity</td>
                <td>Units In Stock</td>
                <td>Discontinued</td>
                <td>Cost</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $product)
                <tr>
                    <td>{{ $product['productID'] }}</td>
                    <td>{{ $product['productName'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ $product['unitsInStock'] }}</td>
                    <td>{{ $product['disContinued'] ? 'Yes' : 'No' }}</td>
                    <td>{{ $product['cost'] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <h1> Total Number Of Products are {{ $TotalProducts }}</h1>
    <ul>
        @foreach ($Products as $product)
            <li>{{ $product['productName'] }}</li>
        @endforeach
    </ul>
    <ol class="list-unstyled">
        @foreach ($Products as $product)
            <li>
                <input type="checkbox" name="productnames" id="{{ $product['productID'] }}">
                {{ $product['productName'] }}
            </li>
        @endforeach
    </ol>
    <div class="">
        <select class="form-select" name="" id="">
            @foreach ($Products as $product)
                <option value={{ $product['productID'] }}>
                    {{ $product['productName'] }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="">
        <select class="form-select" name="" id="" size="4">
            @foreach ($Products as $product)
                <option value={{ $product['productID'] }}>
                    {{ $product['productName'] }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="">
        <label for="">PorductID</label>
        <input class="form-control" type="text" value="{{ $Products[2]['productID'] }}">

    </div>
    <div class="">
        <h2>Select Processor</h2>
        <select name="" id="">
        @foreach ( $Processors as $processor )
        <optgroup label="{{  $processor['Category'] }}">
            @foreach ($processor['processors'] as $processorName ){
                <option value="">{{ $processorName }}</option>
            }

            @endforeach

        @endforeach
    </select>
    </div>
</body>

</html>
