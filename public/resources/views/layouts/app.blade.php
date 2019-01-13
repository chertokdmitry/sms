<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('public/css/signin.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('public/css/cover.css') }}" rel="stylesheet" type="text/css" >
    <title>SMS Online</title>
</head>

<body class="text-center">
<div id="app" class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header style="margin-bottom:50px;">
        <div class="inner">
            <h3 class="masthead-brand">
                <a href="/">
                    <img src="https://img.icons8.com/color/96/000000/sms.png">
                    SMS Online</a>
            </h3>&nbsp;
            <nav class="nav nav-masthead justify-content-center">
                <!-- Authentication Links -->
                <a  class="nav-link {{ $navStatus[0] }}"  href="/">Отправить SMS</a>
                <a  class="nav-link {{ $navStatus[1] }}"  href="/messages">Сообщения</a>
            </nav>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </header>

    @yield('content')

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>SMS  Online</p>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="public/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


