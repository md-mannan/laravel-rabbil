<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
    <div class="container ">
        <h1 class="alert alert-success mt-5">Blade view</h1>
        <div class="card">
            <!--   //Pass data and Display in Blade view -->
            {{$headlineKey}}
            {!!$alertKey!!}
            <div class="card-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident dolores sit rem ipsum quasi quae doloribus eveniet consequatur laboriosam porro aliquam veritatis dolorum ad, quo nisi cupiditate! Ducimus, earum ut.</div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>