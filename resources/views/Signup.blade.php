<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="alert alert-success">Signup Page</h1>

    <hr>
    <nav class="nav flex-column">

        <a class="nav-link btn-primary" href="{{url('/account/profile')}}">Profile</a>
        <a class="nav-link btn-primary" href="{{url('/account/update')}}">Update Profile</a>
        <a class="nav-link btn-primary" href="{{url('/account/signup')}}">Signup</a>
        <a class="nav-link btn-primary" href="{{url('/account/login')}}">Login</a>
        <a class="nav-link btn-primary" href="{{url('/account/logout')}}">Logout</a>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>