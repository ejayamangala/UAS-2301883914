<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="{{ asset('style.css') }}" rel="stylesheet">

    </head>
    <body>
            @auth
            @else

            <div class="navbar">
                <div class="headerly">
                    <h1>Amazing E-Book</h1>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                </nav>
            </div>
        </div>

        @endauth

        </div>

        <div class="container">
            @yield('content')
        </div>


        <div class="footer">
            <h10> © Amazing E-book 2022 </h10>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
