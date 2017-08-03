<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'sandbox173ca8323e4c4007ad8d3b8a0ed3cbb0.mailgun.org',
        'secret' => 'key-aa6616496df0a072217111414dbbaf32',
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'dinero' => [
        'secret' => env('DINERO_SECRET', 'SECRET'),
        'client' => env('DINERO_CLIENTID', 'CLIENTID'),
    ]


];
