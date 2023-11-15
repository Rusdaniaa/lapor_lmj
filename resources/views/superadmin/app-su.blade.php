<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{url('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.png')}}" type="image/png">

<link rel="stylesheet" href="{{url('assets/css/shared/iconly.css')}}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')
        </div>

        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</div>
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/app.js')}}"></script>

<!-- Need: Apexcharts -->
<script src="{{url('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('assets/js/pages/dashboard.js')}}"></script>

</body>

</html>
