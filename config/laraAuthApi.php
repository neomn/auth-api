<?php

return [

// set registration method to true/false to set them enable/disable
    'registrationMethods' => [
        'phone_number' => true,
        'email' => false,
        'user_name' => true,
        'social_media' => false,
    ],

    'loginMethods' => [
        'user_name' => true,
        'email' => true,
        'phone_number' => true,
        'social_media' => true,
    ],

    'twoFactorAuthMethod' => [
        'phone_number' => true,
        'email' => true,
        'google_authenticator' => true,
    ],

    // force every single user to use two-factor authentication
    'mandatoryTwoFactorAuthentication' => false,
];
