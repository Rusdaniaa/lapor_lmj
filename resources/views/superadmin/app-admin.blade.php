<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{url('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{url('assets/css/shared/iconly.css')}}">
    <link rel="stylesheet" href="{{url('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/pages/datatables.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/pages/fontawesome.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Smlep5IZqVMwPkSTL3BXU39j+kw6J7/8cQpuBq9fYPquLEPInFNPJ/cv6UTcFc9A" crossorigin="anonymous">



</head>

<body >
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

<script>
function changeShowEntries() {
    var perPage = document.getElementById('showEntries').value;
    var keyword = "{{ $keyword ?? '' }}";
    window.location.href = "{{ url('data-admin') }}?perPage=" + perPage + "&search=" + keyword;
}

function searchData() {
  var keyword = document.getElementById('searchInput').value;
    var perPage = "{{ $perPage ?? '' }}";
    window.location.href = "{{ url('data-admin') }}?search=" + keyword + "&perPage=" + perPage;
}


    //document.getElementById('updateForm').addEventListener('submit', function() {
        // Handle the submission of the update form
    //});

</script>

</body>

</html>
