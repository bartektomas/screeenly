<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Screeenly</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    @include('layouts._navigation')

    @if(session('message'))
        <div class="container">
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        </div>
    @endif

    @if (Auth::check())

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts._sidebar')
                </div>

                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>

    @else

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @yield('content')
                </div>
            </div>
        </div>

    @endif

    <div class="container Footer">
        <ul class="list-inline">
            <li><a href="/imprint">Imprint</a></li>
            <li><a href="/terms">Terms of Service</a></li>
            <li><a href="/privacy">Privacy</a></li>
            <li><a href="/about">About / FAQ</a></li>
        </ul>
    </div>

    <!-- Scripts -->
    <script async src="/js/app.js"></script>
</body>
</html>