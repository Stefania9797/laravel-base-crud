<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="top-nav">
                <div class="container">
                    <div class="top-nav-links">
                        <a href="">Lorem, ipsum dolor.</a>
                        <a href="">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="main-nav">
                    <div class="logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/1200px-DC_Comics_logo.svg.png" alt="">
                    </div>
                    <div class="main-nav-links">
                        <a href="">Characters</a>
                        <a href="">comics</a
                        ><a href="">movies</a>
                        <a href="">tv</a>
                        <a href="">games</a>
                        <a href="">collectibles</a>
                        <a href="">videos</a>
                        <a href="">fans</a>
                        <a href="">nws</a>
                        <a href="">shop</a>
                    </div>
                </nav>
            </div>
            <div class="jumbotron">
            </div>
        </header>
        <main>
        @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>