<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Production Environment Custom Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f0f0;
            color: #333;
            padding: 50px;
        }

        .error-container {
            max-width: 800px;
            margin: auto;
        }

        .error-container h1 {
            font-size: 2.5rem;
            color: #e74c3c;
        }

        .exception-details pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            background-color: #f8f9fa;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1>Production Environment Custom Error Page</h1>
        <p>An error has occurred:</p>
        <div class="exception-details">

            <p><strong>{{ get_class($exception) }}</strong></p>
            <p>{{ $exception->getMessage() }}</p>
            <p>File: {{ $exception->getFile() }} at line {{ $exception->getLine() }}</p>
        </div>
    </div>
</body>

</html>
