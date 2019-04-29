@extends('layouts.app')


@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-auth.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <script src="{{'js/firebase-init.js'}}"></script>
    <script src="{{'js/firebase-phone-auth.js'}}"></script>
    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in
                // Redirect him to registration
                window.location.href = '/registration-step1'
            }
        });
    </script>

@endsection

@section('content')


    <div class="page-wrapper bg-gra-03  p-t-45 p-b-50 mt-50">
        <div class="wrapper wrapper--w790" id="firebaseui-auth-container">
        </div>
    </div>



@endsection
