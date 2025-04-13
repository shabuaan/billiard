<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pool Billiard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
                    Pool Billliard Association
                </div>

                <div class="links">
                    <a href="https://laravel.com/">Ranking</a>
                    <a href="https://laracasts.com">Table Booking</a>
                    <a href="https://laravel-news.com">Bookings</a>
                    <a href="https://blog.laravel.com">Shop</a>
                </div>

                <div class="container mt-5">
    <h1 class="text-center mb-4">Pool Billiard Association - Table Booking</h1>
    <div class="row">
        @for ($i = 1; $i <= 8; $i++)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Table {{ $i }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Available Booking Slots:</p>
                        <ul class="list-group">
                            @foreach (['10AM', '12PM', '2PM', '4PM', '6PM', '8PM'] as $slot)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $slot }}
                                    <button class="btn btn-sm btn-outline-success">Book</button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
            </div>
        </div>
    </body>
</html>
