<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <!-- <link rel="shortcut icon" href="img/fav.png"> -->
        <!-- Author Meta -->
        <meta name="author" content="MozDevz">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>IDAI Africa</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
        <!-- <link rel="stylesheet" href="css/jquery.DonutWidget.min.css"> -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
        <link rel="stylesheet" href="{{'css/main.css'}}">
    </head>

    <body>

        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}

        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <h1>IDAI Africa</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="#home">INSTITUIÇAO</a></li>
                            <!-- Dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    VOLUNTÁRIO
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="generic.html">Criar conta</a>
                                    <a class="dropdown-item" href="elements.html">Entrar</a>
                                </div>
                            </li>
                            <li><a href="#service">PESSOAS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{asset('img/header-bg2.jpg')}}">
            <div class="overlay-bg overlay"></div>
            <div class="container">
                <div class="row fullscreen  d-flex align-items-center justify-content-end">
                    <div class="banner-content col-lg-6 col-md-12">
                        <h1>
                            Ajude Às<br>
                            <span>Vitimas</span> do <br>
                            Ciclone <span>IDAI</span>
                        </h1>
                        <a href="#" class="primary-btn2 header-btn text-uppercase">Registe-se</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- start service Area-->
        <section class="service-area pt-100 pb-150" id="service">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Qualquer tipo de ajuda é válida</h1>
                            <p>Esta pltaforma permite que Organizações que trabalham directamente com a ajuda humanitária às vitimas do ciclone IDAI voluntários econtrem voluntários.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sigle-service col-lg-4 col-md-6">
                        <span class="lnr lnr-apartment"></span>
                        <h4>Encontre Organizações</h4>
                        <p>
                            Veja todas as organizações que trabalham directamnete com a ajuda Humanitária do IDAI.
                        </p>
                        <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
                    </div>
                    <div class="sigle-service col-lg-4 col-md-6">
                        <span class="lnr lnr-user"></span>
                        <h4>Entre como Voluntário</h4>
                        <p>
                            Seja um voluntário e disponibilize alguns dos seus recusos para ajudar.
                        </p>
                        <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
                    </div>
                    <div class="sigle-service col-lg-4 col-md-6">
                        <span class="lnr lnr-users"></span>
                        <h4>Encontre Voluntários</h4>
                        <p>
                            Encontre todos voluntários disponível para ajudar e veja os seus recursos.
                        </p>
                        <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>--}}
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/parallax.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>
