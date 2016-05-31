<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School of Light</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Customizable CSS -->
    {{ HTML::style('css/main.css') }}
    {{ HTML::style('css/green.css') }}
    {{ HTML::style('css/owl.carousel.css') }}
    {{ HTML::style('css/owl.transitions.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/custom.css') }}

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">

    <!-- Icons/Glyphs -->
    {{ HTML::style('fonts/fontello.css') }}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- ============================================================= HEADER ============================================================= -->
<header>
      <div class="navbar">

        <div class="navbar-header">
          <div class="container">


            <!-- ============================================================= LOGO MOBILE ============================================================= -->

            <a class="navbar-brand"  href="{{ URL::to('/') }}"><img src="{{ URL::asset('assets/images/logo.png') }}" class="logo" alt=""></a>

            <!-- ============================================================= LOGO MOBILE : END ============================================================= -->

            <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>

          </div><!-- /.container -->
        </div><!-- /.navbar-header -->

        <div class="yamm">
          <div class="navbar-collapse collapse">
            <div class="container">

              <!-- ============================================================= LOGO ============================================================= -->

              <a class="navbar-brand" href="{{ URL::to('/') }}" ><img src="{{ URL::asset('assets/images/logo.png') }}" class="logo" alt=""></a>

              <!-- ============================================================= LOGO : END ============================================================= -->


              <!-- ============================================================= MAIN NAVIGATION ============================================================= -->

              <ul class="nav navbar-nav">

                <li class="dropdown"><a href="{{ URL::to('/') }}">Home</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle js-activated">Products</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('products/solace') }}">SoL ACE</a></li>
                    <li><a href="{{ URL::to('products/code-hr') }}">Code HR</a></li>
                    <li><a href="{{ URL::to('products/solar') }}">SoL AR</a></li>
                    <li><a href="{{ URL::to('products/solmate') }}">SoL MATE</a></li>
                    <li><a href="{{ URL::to('products/sol-search') }}">SoL Search</a></li>
                    <li><a href="{{ URL::to('products/solve') }}">SoL VE</a></li>
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.dropdown -->

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle js-activated">Careers</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('about') }}">Work with us</a></li>
                    <li><a href="{{ URL::to('careers') }}">Partner Postings</a></li>
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.dropdown -->

                <li class="dropdown"><a href="{{ URL::to('about') }}">About</a></li>
                <li class="dropdown"><a href="{{ URL::to('blog') }}">Blog</a></li>
                <li class="dropdown"><a href="{{ URL::to('community') }}">Community</a></li>
                <li class="dropdown"><a href="{{ URL::to('contact') }}">Contact</a></li>




                <li></li><!-- mobile navbar doesnt work if this is removed -->

              </ul><!-- /.nav -->

              <!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->

            </div><!-- /.container -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.yamm -->
      </div><!-- /.navbar -->
    </header>




    <!-- ============================================================= MAIN ============================================================= -->

    <main>

     @yield('content')

    </main>

    <!-- ============================================================= MAIN : END ============================================================= -->


    <!-- ============================================================= FOOTER ============================================================= -->

    <footer class="dark-bg">
      <div class="container inner">
        <div class="row">

          <div class="col-md-6 col-sm-6 inner">
            <h4>Who we are</h4>
            <a href="{{ URL::to('/') }}"><img class="logo img-intext" src="{{ URL::asset('assets/images/logo2.png') }}" style="height:100px; width:auto;" alt=""></a>
            <p>We are a India focused, innovative organisation supporting all aspirations towards building great Strategy and Human Resource practices. Through our comprehensive suite of products and services, we build future ready and integrated HR models that are growth focused and inclusive at once.</p>
            <a  href="{{ URL::to('about') }}" class="txt-btn">More about us</a>
          </div><!-- /.col -->


          <div class="col-md-6 col-sm-6 inner">
            <h4>Get In Touch</h4>
            <p>If you want us to help you out with any problems, do drop us a line.</p>
            <ul class="contacts">
              <li><i class="icon-location contact"></i> 4A, 43, Kalpatru Estate, JVLR, Andheri East, Mumbai - 400093</li>
              <li><i class="icon-mobile contact"></i> +91 9819221837</li>
              <li><a href="mailto:connect@schooloflight.in"><i class="icon-mail-1 contact"></i> connect&#64;schooloflight.in</a></li>
            </ul><!-- /.contacts -->
          </div><!-- /.col -->



        </div><!-- /.row -->
      </div><!-- .container -->

      <div class="footer-bottom">
        <div class="container inner">
          <p class="pull-left">© 2015 School of Light. All rights reserved.</p>
          <ul class="footer-menu pull-right">
            <li ><a href="{{ URL::to('careers') }}">Careers</a></li>
            <li ><a href="{{ URL::to('about') }}">About</a></li>
            <li ><a href="{{ URL::to('blog') }}">Blog</a></li>
            <li ><a href="{{ URL::to('community') }}">Community</a></li>
            <li ><a href="{{ URL::to('contact') }}">Contact</a></li>
          </ul><!-- .footer-menu -->
        </div><!-- .container -->
      </div><!-- .footer-bottom -->
    </footer>

    <!-- ============================================================= FOOTER : END ============================================================= -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/jquery.easing.1.3.min.js') }}
    {{ HTML::script('js/jquery.form.js') }}
    {{ HTML::script('js/jquery.validate.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/bootstrap-hover-dropdown.min.js') }}
    {{ HTML::script('js/skrollr.min.js') }}
    {{ HTML::script('js/skrollr.stylesheets.min.js') }}
    {{ HTML::script('js/waypoints.min.js') }}
    {{ HTML::script('js/waypoints-sticky.min.js') }}
    {{ HTML::script('js/owl.carousel.min.js') }}

     <script>
      $(function() {

        $("#owl-career").owlCarousel({
          navigation: false,
          autoHeight: true,
          slideSpeed: 300,
          pagination: false,
          paginationSpeed: 400,
          rewindNav: true,
          singleItem: true,
          navigationText: ["<i class='icon-left-open-mini'></i>", "<i class='icon-right-open-mini'></i>"]
        });

        var owl = $(".owl-carousel").data('owlCarousel');

        $('#nextReason').click(function() {
          owl.next();
        });

      });
    </script>

    {{ HTML::script('js/jquery.isotope.min.js') }}
    {{ HTML::script('js/jquery.easytabs.min.js') }}
    {{ HTML::script('js/google.maps.api.v3.js') }}
    {{ HTML::script('js/viewport-units-buggyfill.js') }}
    {{ HTML::script('js/scripts.js') }}

    <!-- OnScroll CSS3 Animations for Modern Browsers and IE10+ -->
    <!--[if !IE]> -->
    {{ HTML::script('js/onscroll.js') }}
    <!-- <![endif]-->

    @yield('scripts')

  </body>
</html>