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

        .item:hover{
            background-color: #3768CD;
            color: white;
        }

        body{
            background-color: #f5f5f5;
        }


        .actividade{
            padding: 15px;
            /*border: 1px solid #6cb2eb;*/
            border: 1px solid #3768CD;
            border-radius: 10px;
            font-size: 10pt;
            background-color: white;
            color: #3768CD;
            margin-left: 10px ;
        }

        .actividade:hover{
            background-color: #3768CD;
            color: white;
        }

    </style>

@endsection

@section('content')

    <div class="mt-100 container-fluid">
        <div class="row">
            <div class="col-4" style="position: fixed;">
                <div class="card card-5">

                    <div class="card-heading" style="background-color: #3768CD">
                        <h2 class="title">Filtros</h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Províncias</h3>
                                <div class="d-flex flex-column mt-3">
                                    <span class="item" style="background-color: #3768CD; color: white">Inhambane</span>
                                    <span class="item">Maputo</span>
                                    <span class="item">Gaza</span>
                                    <span class="item">Zambézia</span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Recursos</h3>
                                <div class="d-flex flex-column mt-3">
                                    <span class="item">Pás</span>
                                    <span class="item">Enchadas</span>
                                    <span class="item">Carro</span>
                                    <span class="item">...</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 text-center">
                            <button class="btn btn-info  mt-50">Limpar Filtros</button>
                        </div>

                    </div>
                </div>
            </div>

            </div>

        <div class="col-4"></div>

            <div class="col-8 mt-3" style="position: absolute; right: 0">
                    <div class="d-inline-block">
                        <span class="actividade">Actividad 1</span>
                        <span class="actividade">Actividad 1</span>
                        <span class="actividade">Actividad 1</span>
                        <span class="actividade">Actividad 1</span>
                        <span class="actividade">Actividad 1</span>
                    </div>

                <div class="row mt-3">
                    @foreach([1,2,2,2,2,22,2,1,1,1,1,1,1,1,1,1,1,1,2] as $teste)
                        <div class="col-lg-4 col-sm-6 mt-10">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title mt-3" style="color: #3768CD">Herquiloide Hele</h4>
                                    <p class="card-text"> <i class="fa fa-plus"></i>Maxixe, Imhambane</p>
                                    <p class="card-text">+258 847005571</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>





@endsection
