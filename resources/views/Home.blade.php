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
                <!-- Array Loop Property 

                loop->index: Returns the zero-based index of the current loop iteration.
                loop->iteration: Returns the current loop iteration count (starts from 1).
                loop->remaining: Returns the number of iterations remaining in the loop.
                loop->count: Returns the total number of items in the loop.
                loop->first: Returns true if the current iteration is the first in the loop.
                loop->last: Returns true if the current iteration is the last in the loop.
                loop->depth: Returns the current depth of the loop nesting.
                -->
                @if($LoginStatusKey==true)
                <ol>
                    <!-- if Data Available -->
                    @forelse ( $CountryKey as $Country )

                    <li start="{{$loop->index}}">{{$Country}}</li>
                    {{$loop->count}}
                    @break
                    @empty
                    <p>Data Not Found</p>
                    @endforelse
                </ol>
                @elseif ($LoginStatusKey==false)
                <h3>Please Login First</h3>

                @else
                <h3>Login Status Not Found</h3>


                @endif
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>