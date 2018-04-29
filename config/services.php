<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '436364246805540',
    'client_secret' => '920cab2f16202bd2e239be3ff4c244af',
    'redirect' => 'http://dpunch.com/login/facebook/callback',
    ],
    'google' => [
    'client_id' => '3476262945-dls1nffovogcfvb3ukt20vb482877uta.apps.googleusercontent.com',
    'client_secret' => 'RHVpifn_GsG6pqmuWJZ1CZs3',
    'redirect' => 'http://dpunch.com/login/google/callback',
    ],

];
