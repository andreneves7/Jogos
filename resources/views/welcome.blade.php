<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TicTacToe</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
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

    .masthead {
        text-align: center;
        background-color: black;
        background-image: url(/img/Jogo_da_velha_-_tic_tac_toe.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 80%;
        width: 60%;
        height: 80%;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
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

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100px;
        /* Set the fixed height of the footer here */
        line-height: 60px;
        /* Vertically center the text there */
        text-align: center;
        background-color: black;
        background-image: url(/img/ismai.png);
        background-repeat: no-repeat;
        background-position: left center;
        background-size: 8%;
    }


    .footer span.copyright {
        font-size: 100%;
        line-height: 40px;
        color: #ffff4d;
        font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
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


        <div class="masthead">


        </div>
    </div>
</body>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2019</span>
                <p></p>
                <span class="copyright">Joaquim Neves</span>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>

</html>