<html lang="en" style="height: auto;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Name</title>

  <!-- Google Font: Source Sans Pro -->
  @include('subview.head')

</head>

<body class="layout-top-nav
@if($mode=='light')
light-mode background_light
@else
dark-mode background_dark
@endif
" style="height: auto;">
  <div class="wrapper">
    <!-- Navbar -->
    <nav id="header" class="main-header navbar navbar-expand-md 
    @if($mode=='light')
    navbar-light
    @else
    navbar-dark navbar-navy
    @endif
    sticky-top headroom">
      <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
          <img src="{{URL::asset('image/artworks-000206574355-pe3hie-t500x500.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <img style="width:100px;height:33px" src="{{URL::asset('image/YourName-logo.png')}}">
        </a>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            @include('subview.navbar_home_left')
          </ul>
        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          @include('subview.navbar_home_right')
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div id="content" style="padding-top:70px;">
      <!-- <div class="content"> -->
      <div class="container">
        @yield('content')
        @include('subview.footer')
      </div>
      <!-- </div> -->
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  </div>

  <!-- Bootstrap 4 -->
  <script src="{{URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{URL::asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{URL::asset('dist/js/demo.js')}}"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script>
    (function($) {


      $(function() {


        $("#header").headroom({


          // vertical offset in px before element is first unpinned


          offset: 100,


          // or you can specify tolerance individually for up/down scroll


          tolerance: {


            up: 20,


            down: 20


          },
          classes: { // when element is initialised


            initial: "headroom",


            // when scrolling up


            pinned: "headroom--pinned",


            // when scrolling down


            unpinned: "headroom--unpinned",


          }


        });


      }); // end of document ready


    })(jQuery); // end of jQuery name space
  </script>

  
</body>

</html>