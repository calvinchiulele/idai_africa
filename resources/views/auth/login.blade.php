@extends('layouts.main')


@section('additional-styles')

    <link rel="stylesheet" href="{{'css/register/main.css'}}">
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-auth.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <script src="{{'js/firebase-init.js'}}"></script>
    <script src="{{'js/firebase-phone-auth.js'}}"></script>
    <script>
        /**
         * sends a request to the specified url from a form. this will change the window location.
         * @param {string} path the path to send the post request to
         * @param {object} params the paramiters to add to the url
         * @param {string} [method=post] the method to use on the form
         */

        function post(path, params, method='post') {

            // The rest of this code assumes you are not using a library.
            // It can be made less wordy if you use one.
            const form = document.createElement('form');
            form.method = method;
            form.action = path;

            for (const key in params) {
                if (params.hasOwnProperty(key)) {
                    const hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = key;
                    hiddenField.value = params[key];

                    form.appendChild(hiddenField);
                }
            }

            document.body.appendChild(form);
            form.submit();
        }

        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in
                // Redirect him to registration
                // window.location.href = '/registration-step1'
                post('/_save_session', {_user_phone: user.phoneNumber.substring(1)});
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
