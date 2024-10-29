<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mb-3">
                <h1>Welcome {{Auth::user()->name}} {{-- displays user's information in json format --}}</h1>           
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{route('inner')}}" class="btn btn-primary">Go to Inner Page</a>
                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>