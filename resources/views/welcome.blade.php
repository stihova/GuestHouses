<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 94px;
                text-shadow: 3px 2px gray;
                font-family: Tahoma, Geneva, sans-serif;
            }

            .links > a {
                color: #333333;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 1000;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .hero-image {
                background-image: url("https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjFsqyYp-HfAhVHqIsKHWIbAHwQjRx6BAgBEAU&url=https%3A%2F%2Fluxuryhotelawards.com%2F&psig=AOvVaw3ckOjFddIgK8ETsr1a3QkE&ust=1547144084900794");
                background-color: #dd99ff;
                height: 500px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            .hero-text {
                color: white;
            }

        </style>
    </head>
    <body>

    <div class="hero-image">
        <div class="hero-text">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Guest Houses
                </div>

                <div class="links">
                    <a href="/houses">Houses</a>
                    <a href="/locations">Locations</a>
                    <a href="/types">House Types</a>
                    <a href="/images">Image</a>
                </div>
            </div>
        </div>

        </div>
    </div>

    </body>
</html>
