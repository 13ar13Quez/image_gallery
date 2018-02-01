<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Test Upload') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('styles')

</head>
<body>

<div id="app" class="wrapper">
    <div class="sidebar" data-active-color="blue" data-background-color="dark-blue" >
        {{--data-background-color = black | black-gray | dark-blue | blue-gray | blue | azure--}}

        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text logo-mini">

            </a>
            <a href="{{ url('/') }}" class="simple-text logo-normal">
                <img src="{{ asset('images/logo.jpg') }}" alt="Quez.Passagorn">
            </a>
        </div>
        <div class="sidebar-wrapper">
            @include('layouts.user')
            @include('layouts.sidebar')
        </div>
    </div>
    <div class="main-panel">
        @include('layouts.header')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href=""> Quez.Passagorn </a>
                </p>
            </div>
        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<script>

</script>
</body>
</html>
