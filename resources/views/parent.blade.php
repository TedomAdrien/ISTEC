<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <title>@yield('title')</title>

    <!-- Styles Bootstrap -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!-- Styles Templates -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('css/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/ animsition.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recapitulatif.css') }}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    @stack('css')

</head>


<body >
<div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross" style="color:#f4a105;"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->

      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">

              <span><i class="icon-location2" style="color:#f4a105;"></i>Ndogbong, Douala, Cameroun</span>
              <span><i class="icon-phone2" style="color:#f4a105;"></i>+237 699 683 903 / 671 612 424</span>
              <span><i class="icon-mail" style="color:#f4a105;"></i><a href="mailto:istec.cmr@gmail.com">istec.cmr@gmail.com</a></span>

              
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter" style="color:#f4a105;"></i></a></li>
                <li><a href="https://www.facebook.com/ISTECCAMEROUN/"><i class="icon-facebook2" style="color:#f4a105;"></i></a></li>
                <li><a href="https://www.instagram.com/istec_istaco/"><i class="icon-instagram2"style="color:#f4a105;"></i></a></li>
                <li><a href="#"><i class="icon-youtube" style="color:#f4a105;"></i></a></li>
                {{-- <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="nav-bar-brnd" href="/" title="logo_istec"> <div style="display: block !important;margin:0px 15px!important;width: 80px;"><img src="{{ asset('images/home-images/logo.png') }}" alt="logo.jpg" width="80px" height:auto> </div> </a>

          </div>
          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class=" @if (\Request::is('/')) active  @endif"><a href="{{url('/')}}">Accueil</a></li>
            <li class=" @if (\Request::is('formations')) active  @endif"><a href="{{url('/formations')}}">Formations</a></li>
            <li class=" @if (\Request::is('teachers')) active  @endif"><a href="{{url('/teachers')}}">Enseignants</a></li>
            <li class=" @if (\Request::is('events')) active  @endif"><a href="{{url('/events')}}">Evenements</a></li>
            <!-- <li class="{{Request::is('/formations')?'active':''}}"><a href="{{url('/formations')}}">formation</a></li> -->
              <li class="dropdown @if(\Request::is('#')) active @endif">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="/abouts">À propos de nous</a></li>
                  <li><a href="/courses">Filières les plus démandées</a></li>
                   <li><a href="/course_singles">Description des cycles</a></li>
                  <li><a href="/galery">Galerie</a></li>
                  <li><a href="/News">News</a></li>
                </ul>
              </li>
              <li class ="@if (\Request::is('contact')) active  @endif"><a href="{{url('contact')}}">Contact</a></li>
              <li class = "@if (\Request::is('inscription')) active  @endif"><a href="{{url('inscription')}}" >Inscription</a></li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('content')

      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>A Propos De L'ISTEC </h3>
                <p>Une formation académique pour l'obtention d'un diplôme universitaire suivie d'un corps professoral dynamique une direction jeune et compétente pour les études, l'étudiant a donc tous les atouts pour réussir.</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">


                  <li><a href="#"><i class="icon-twitter"style="color:#f4a105;"></i></a></li>
                  <li><a href="https://www.facebook.com/ISTECCAMEROUN/"><i class="icon-facebook" style="color:#f4a105;"></i></a></li>
                  <li><a href="#"><i class="icon-github" style="color:#f4a105;"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble" style="color:#f4a105;"></i></a></li>
                  {{-- <li><a href="#"><i class="icon-linkedin"></i></a></li> --}}
                  <li><a href="#"><i class="icon-youtube" style="color:#f4a105;"></i></a></li>

                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Liens</h3>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/teachers">Enseignants</a></li>
                  <li><a href="/courses">Filières</a></li>
                  <li><a href="/teachers">Professeurs</a></li>
                  <li><a href="/">Actualités</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">

                  <li><i class="icon-location2" style="color:#f4a105;"></i> <span>Ndogbong, Douala, Cameroun</span></li>
                  <li><i class="icon-phone2" style="color:#f4a105;"></i><span>+237 699 683 903 / 671 612 424</span></li>
                  <li><i class="icon-mail" style="color:#f4a105;"></i><span><a href="mailto:istec.cmr@gmail.com">istec.cmr@gmail.com</a></span></li>

                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63677.699361510335!2d9.71579706269597!3d4.049740064457094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x10610d0a26a6795b%3A0xca81ef8fe79e0480!2sISTEC%2C%20Unnamed%20Road%2C%20Douala!3m2!1d4.0496552!2d9.750816799999999!5e0!3m2!1sfr!2scm!4v1631277772378!5m2!1sfr!2scm"  style="border:0; width:100%; height:200px" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>

          </div>
          <!-- END row -->

        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">

                <p>&copy; 2021 <a href="/">ISTEC Douala</a><!-- &amp; Developed with <i class="icon icon-heart"></i> by <a href="#">ISTEC</a> --></p>

              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop"><i class="icon-arrow-long-up" style="color:#f4a105; background-color:white;padding:10px"></i></a></p>
                <p>Réalisé par <a href="mailto:blakergenius9@gmail.com">blakergenius9@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>

    <!-- Scripts Bootsrap -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->

    <!-- Scripts Templates -->
    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
     @stack('js')
</body>

</html>
