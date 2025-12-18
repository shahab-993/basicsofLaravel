<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User Details</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{ asset('/') }}js/script.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h2>User Details</h2>
                <div class="card w-75 p-2">
                    <div class="card-header" style="height: 300px;">
                        <p><b>User Name: {{ $users['username'] }}</b></p>
                        <img src="{{ $image }}" alt="User Avatar" class="card-img-top" height="200">
                    </div>
                    <div class="card-body">
                        <dt>Email</dt>
                        <dd>{{ $users['email'] }}</dd>
                        <dt>First Name</dt>
                        <dd>{{ $users['name']['firstname'] }}</dd>
                        <dt>Last Name</dt>
                        <dd>{{ $users['name']['lastname'] }}</dd>
                        <dt>Phone</dt>
                        <dd>{{ $users['phone'] }}</dd>
                    </div>
                    <div class="card-footer">
                        <form method="post" action="{{ url('/showuserdetails') }}">
                            @csrf
                            <input type="text" name="useridcounter" value="{{ $users['id'] }}" class="w-10">
                            <button value="Next" type="submit" name="btnNext" class="btn btn-danger btn-sm">
                                <span class="bi bi-chevron-right"></span>
                                Next user</button>
                            <button value="Previous" type="submit" name="btnPrevious" class="btn btn-danger me-2">
                                <span class="bi bi-chevron-left"></span>
                               Previous User</button>

                        <input class="form-check-input" type="checkbox" id="chkShowHide" onclick="toggleAll()">
                        <label for="chkShowHide" id="lblShowHide">Show Address Details</label>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h2>Address Details</h2>
                <div class="card w-50 p-2" id="showUsersDetails-{{ $users['id'] }}" style="display: none">
                    <div class="card-header" style="height: 100px">
                        <p><b>City:{{ $users['address']['city'] }}</b></p>
                    </div>
                    <div class="card-body">
                        <dl>
                            <dt>Street</dt>
                        <dd>{{ $users['address']['street'] }}</dd>
                        <dt>Street Number</dt>
                        <dd>{{ $users['address']['number'] }}</dd>
                        <dt>Zip Code</dt>
                        <dd>{{ $users['address']['zipcode'] }}</dd>
                        <dt>Geo Location Latitude</dt>
                        <dd>{{ $users['address']['geolocation']['lat'] }}</dd>
                        <dt>Geo Location Longitude</dt>
                        <dd>{{ $users['address']['geolocation']['long'] }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
