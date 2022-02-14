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
            <div class="na">

            <div class="d-flex navbar">
                <div class="headerlg">
                    <h1>Amazing E-Book</h1>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li>
                            <form action="/logout" method="post">
                             @csrf
                            <button type="submit" class="btn btn-warning">Logout</button>
                        </form>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="d-flex navbar2">
                <nav class="navbar2 navbar-expand-lg navbar-light ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item1">
                            <a class="nav-link active" aria-current="page" href="/homeadmin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/cartadmin">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('users.editprofile')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/accountedit">Account Maintenance</a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>


            @else

            <div class="navbar">
                <div class="headerlg2">
                    <h1>Amazing E-Book</h1>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/register">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">Log in</a>
                        </li>
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
