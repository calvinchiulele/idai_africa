@extends('layouts.app')

@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">

    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-auth.js"></script>
    <script src="{{'js/firebase-init.js'}}"></script>
    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            if (!user) {
                window.location.href = '/login';
            }
        });

        function activateSubmitButton() {
            if (document.getElementById('privacy').checked === true && document.getElementById('contact').checked === true) {
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('submit').disabled = true;
            }
        }
    </script>

@endsection

@section('content')
    <div class="page-wrapper bg-gra-03  p-t-45 p-b-50 mt-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #3768CD">
                    <h2 class="title">Tornar-se Voluntário</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/savestep1">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nome Completo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" id="name" placeholder="(Ex. Paulo Ferreira)" value="{{$user->name}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Telemóvel</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" id="phonenumber" name="phonenumber" placeholder="(Ex. +258 84 123 4567)" value="{{$user->phonenumber}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Província</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="province" id="province" class="input--style-5">
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    <!--input class="input--style-5" type="text" id="province" name="province" placeholder="(Ex. Sofala)"-->
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Distrito</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="district" id="district" class="input--style-5">
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                    <!-- input class="input--style-5" type="text" id="district" name="district" placeholder="(Ex. Beira)"-->
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="checkbox" id="privacy" name="privacy" value="privacy" style="width: 0" onchange="activateSubmitButton()"> Concordo com os termos de Privacidade <br>
                        </div>
                        <div class="text-center">
                            <input type="checkbox" id="contact" name="contact" value="contact" style="width: 0" onchange="activateSubmitButton()">Concordo que serei contactado pelo número de telemóvel que forneci
                        </div>

                        <div class="text-center" style="margin-top: 16px">
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="submit" disabled>Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
