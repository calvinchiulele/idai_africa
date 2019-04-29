@extends('layouts.app')

@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">

    <style>

        .card-5{
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 6px 10px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 6px 10px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 6px 10px 0px rgba(0, 0, 0, 0.15);
        }

        div.card .card-heading{
            margin-bottom: 0 !important;
        }

        div.card .card-body{
            padding-top: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .item{
            padding: 10px;
            border: 1px solid #3768CD;
            text-align: center;
            /*padding-left: 0;*/
            border-radius: 10px;
            font-size: 12pt;
            margin-bottom: 10px;
            background-color: white;
            color: #3768CD;
        }

        .is-active {
            background-color: #3768CD;
            color: white;
        }

        body{
            background-color: #f5f5f5;
        }
        a:hover{
            color: white;
        }

    </style>

    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-auth.js"></script>
    <script src="{{'js/firebase-init.js'}}"></script>
    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                var phone = user.phoneNumber.substring(1);
                document.getElementById('phonenumber').value = phone;
            } else {
                window.location.href = '/login';
            }
        });
    </script>

@endsection

@section('content')
    <div class="page-wrapper bg-gra-03  p-t-45 p-b-50 mt-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #3768CD">
                    <h2 class="title">Meu Perfil</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" id="name" value="{{$volunteer->user->name}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Telemóvel</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="phonenumber" name="phonenumber" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Província</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="province" name="province" value="{{$volunteer->district->province->name}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Distrito</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="district" name="district" value="{{$volunteer->district->name}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Actividades que posso desempenhar</h3>
                                <div class="d-flex flex-column mt-3">
                                    @foreach($volunteer->categories->all() as $category)
                                        <span class="item">{{$category->name}}</span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Recursos que posso disponibilizar</h3>
                                <div class="d-flex flex-column mt-3">
                                    @foreach($volunteer->assets as $asset)
                                        <span class="item">{{$asset->name}}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a class="btn btn--radius-2 btn--blue" href="/registration-step1">Editar</a>
                            <!-- a class="btn btn--radius-2 btn--blue" href="#">Eliminar</a -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
