@extends('layouts.main')


@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">

@endsection

@section('content')

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



    @endsection
