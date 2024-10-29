<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<body>
    <h1>This is our about page</h1>
    <a href="/">Home Page</a><br>
    <a href="/post">Post</a>

    <a href="{{ route('home') }}">Home Page</a><br>
    <a href="{{ route('mypost') }}">Post</a>
</body>
</html>