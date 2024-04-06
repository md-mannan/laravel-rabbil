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
        <h1 class="alert alert-success mt-5">ForEach loop in Blade view</h1>
        <div class="card">

            <!-- For loop with Blade View -->

            <div class="card-body">

                <ol>
                    <!-- if Empty -->
                    @forelse ( $CityKey as $City )
                    <li>{{$City}}</li>
                    @empty
                    <p>Data Not Found</p>
                    @endforelse
                </ol>
                <ol>
                    <!-- if Data Available -->
                    @forelse ( $CountryKey as $Country )
                    <li>{{$Country}}</li>
                    @empty
                    <p>Data Not Found</p>
                    @endforelse
                </ol>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>