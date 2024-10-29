<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('registerSave')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="useremail">
                            </div>
                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword">
                            </div>
                            <div class="mb-3">
                                <label for="userpassword-confirm" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="userpassword-confirm">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="/" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                    @if($errors->any())
                    <div class="card-footer text-body-secondary">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>