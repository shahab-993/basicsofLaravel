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
    <title>Show All Users</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h2>Users List</h2>
            <table class="table border">
                <thead>
                    <tr>
                        <th>SlNo</th>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>Street Number</th>
                        <th>Zip Code</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=>$user )
                    <tr>
                         <td>{{ $key+1 }}</td>
                         <td>{{ $user['id'] }}</td>
                         <td>{{ $user['username'] }}</td>
                         <td>{{ $user['email'] }}</td>
                         <td>{{ $user['name']['firstname'] }}</td>
                         <td>{{ $user['name']['lastname'] }}</td>
                         <td>{{ $user['address']['city'] }}</td>
                         <td>{{ $user['address']['street'] }}</td>
                         <td>{{ $user['address']['number'] }}</td>
                         <td>{{ $user['address']['zipcode'] }}</td>
                         <td>{{ $user['address']['geolocation']['lat'] }}</td>
                         <td>{{ $user['address']['geolocation']['long'] }}</td>
                         <td>{{ $user['phone'] }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
