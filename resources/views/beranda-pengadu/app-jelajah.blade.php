<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lapor Lumajang</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-kiUDrMJmP3eC0Fj5gqOXsiJ4FMTZR5ac2S9sYXZ3UUBgA3F5px5vYIUKqAA+8fs+XZ2dHnnBb2c8LDDgI0iKYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('assets/user/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
@include('beranda-pengadu.header')

@yield('content')

@include('beranda-pengadu.footer')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{url('assets/user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{url('assets/user/assets/js/isotope.min.js')}}"></script>
  <script src="{{url('assets/user/assets/js/owl-carousel.js')}}"></script>
  <script src="{{url('assets/user/assets/js/wow.js')}}"></script>
  <script src="{{url('assets/user/assets/js/tabs.js')}}"></script>
  <script src="{{url('assets/user/assets/js/popup.js')}}"></script>
  <script src="{{url('assets/user/assets/js/custom.js')}}"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active");
    });
  </script>
  </body>

</html>
