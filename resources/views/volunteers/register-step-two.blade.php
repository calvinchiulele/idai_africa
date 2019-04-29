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

        .is-active {
            background-color: #3768CD;
            color: white;
        }

        body{
            background-color: #f5f5f5;
        }

    </style>

    <script>
        function checkHiddenBox(index, name) {
            var checkboxes = document.getElementsByName(name);
            var isChecked = checkboxes[index].checked;
            if (isChecked) {
                document.getElementById(name.substring(0, name.length - 2) + index).classList.remove('is-active');
            } else {
                document.getElementById(name.substring(0, name.length - 2) + index).classList.add('is-active');
            }
            document.getElementsByName(name)[index].checked = !isChecked;
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
                    <form action="/savestep2" method="post">
                        @csrf

                        <input type="hidden" name="volunteer_id" value="{{$volunteerid}}">

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Actividades que posso desempenhar</h3>
                                <div class="d-flex flex-column mt-3">
                                    @for ($i = 0; $i < count($categories); $i++)
                                        <span class="item" id="selected_categories{{$i}}" onclick="checkHiddenBox({{$i}}, 'selected_categories[]')">{{$categories[$i]->name}}</span>
                                        <input type="checkbox" name="selected_categories[]" value="{{$categories[$i]->id}}" hidden>
                                    @endfor
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <h3 style="font-size: 16pt">Recursos que posso disponibilizar</h3>
                                <div class="d-flex flex-column mt-3">
                                    @for ($i = 0; $i < count($assets); $i++)
                                        <span class="item" id="selected_assets{{$i}}" onclick="checkHiddenBox({{$i}}, 'selected_assets[]')" class="@if(in_array($assets[$i]->id, $volunteer_assets)) {{'is-active'}} @endif">
                                            {{$assets[$i]->name}}
                                        </span>
                                        <input type="checkbox" name="selected_assets[]" value="{{$assets[$i]->id}}" hidden
                                                @if(in_array($assets[$i]->id, $volunteer_assets)) {{' checked'}} @endif>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <div class="w-100 text-center">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
