const ui = new firebaseui.auth.AuthUI(firebase.auth());
ui.start('#firebaseui-auth-container', {
    signInOptions: [
        {
            provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
            recaptchaParameters: {
                size: 'invisible', // 'invisible' or 'compact'
            },
            defaultCountry: 'MZ', // Set default country to Mozambique (+258).
        }
    ],
    signInSuccessUrl: '/registration-step1',
});
