@extends('layouts.app')


@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">

@endsection

@section('content')
    <div class="page-wrapper bg-gra-03  p-t-45 p-b-50 mt-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #3768CD">
                    <h2 class="title">Crie uma Conta</h2>
                </div>
                <div class="card-body">
                    <form method="POST">

                        @csrf()

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-row">
                            <div class="name">Nome</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" placeholder="Joao Carlos">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Cell</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phonenumber" placeholder="phone">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" placeholder="password">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password_verify" placeholder="re-type password">
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submeter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
