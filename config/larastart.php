<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Website Name
    |--------------------------------------------------------------------------
    |
    | The name of the website that you have created using Larastart.
    |
    */

    'name' => env('WEBSITE_NAME', 'Larastart'),

    /*
    |--------------------------------------------------------------------------
    | Website Owner
    |--------------------------------------------------------------------------
    |
    | The name of the websites owner. Your name may be included in emails.
    |
    */

    'owner' => env('WEBSITE_OWNER', 'Admin'),

    /*
    |--------------------------------------------------------------------------
    | Website Email
    |--------------------------------------------------------------------------
    |
    | The name of the website that you have created using Larastart.
    |
    */

    'email' => env('WEBSITE_EMAIL', 'noreply@larastart.com'),

    /*
    |--------------------------------------------------------------------------
    | Confirmation Email Name
    |--------------------------------------------------------------------------
    |
    | Whether or not your users will require their email to be confirmed.
    |
    */

    'confirm-email' => env('CONFIRM_EMAIL', false),

    /*
    |--------------------------------------------------------------------------
    | Require reCaptcha on registration.
    |--------------------------------------------------------------------------
    |
    | Determines whether or not to display recaptcha
    |
    */

    'registration-recaptcha' => env('REGISTRATION_RECAPTCHA', false),

];