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
    <title>Show All Users As Cards</title>
</head>
<body>
<div class="container-fluid">
    <h2>User List</h2>
    <div class="d-flex flex-wrap">
        @foreach ($users as $key=> $user )
        <div class="card m-2 p-2 " style="width: 200px;">
            
            <img src={{ $image }} height="200px" class="card-img-top" alt="">
            <div class="card-header">
                <h2>{{ $user['id'] }}</h2>

            </div>
            <div class="card-body">
                <dl>
                    <dt>First Name</dt>
                    <dd>{{ $user['name']['firstname'] }}</dd>
                    <dt>lastName</dt>
                    <dd>{{ $user['name']['lastname'] }}</dd>
                    <dt>Email</dt>
                    <dd>{{ $user['email'] }}</dd>

                </dl>

            </div>
        </div>

        @endforeach
    </div>
</div>
</body>
</html>
