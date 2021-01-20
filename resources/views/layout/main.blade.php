<html>
    <head>
        <title>
            @yield('title', $applicationName)
        </title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}"></script>

        <style>
            td {
                padding-right: 30px;
            }
        </style>
    </head>
    <body>

        <h1>{{ $applicationName }}</h1>
        
        <div class="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="#">...</a></li>
                </ul>
            @show
        </div>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>