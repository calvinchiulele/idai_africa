@extends('layouts.app')

@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">

@endsection

@section('content')
    <div class="page-wrapper bg-gra-03  p-t-45 p-b-50 mt-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #3768CD">
                    <h2 class="title">Tornar-se Voluntário</h2>
                </div>
                <div class="card-body">
                    <form method="POST">

                        <div class="form-row">
                            <div class="name">Nome Completo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nome" placeholder="(Ex. Paulo Ferreira)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Telemóvel</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" id="phone" name="phone" placeholder="(Ex. +258 84 123 4567)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Província</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="province" name="province" placeholder="(Ex. Sofala)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Distrito</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="district" name="district" placeholder="(Ex. Beira)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name"><input type="checkbox" name="privacy" value="privacy">Concordo com os termos de Privacidade</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="name"><input type="checkbox" name="contact" value="contact">Aceito ser contactado pelo número de telemóvel que forneci</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
