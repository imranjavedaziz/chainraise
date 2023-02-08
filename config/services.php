<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],
    
    'google' => [
        'client_id' => '267275484890-dabde5ler61qd3lpa4k2t7ft2e0fga3d.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://beta.chainraise.info/manage/login/google/callback',
    ], 

    'facebook' => [
        'client_id' => '1104528113341035',
        'client_secret' => '88c3dabe7599d8e975a500bbf4dbdd3d',
        'redirect' => 'https://beta.chainraise.info/manage/login/facebook/callback',
    ], 

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
