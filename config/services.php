<?php
/* Platform.sh */
$variables = json_decode(base64_decode(getenv("PLATFORM_VARIABLES")), true);

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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'eveonline' => [
        'client_id' => env('EVEONLINE_CLIENT_ID', ($variables && array_key_exists('EVEONLINE_CLIENT_ID', $variables)) ? $variables['EVEONLINE_CLIENT_ID'] : null),
        'client_secret' => env('EVEONLINE_CLIENT_SECRET', ($variables && array_key_exists('EVEONLINE_CLIENT_SECRET', $variables)) ? $variables['EVEONLINE_CLIENT_SECRET'] : null),
        'redirect' => env('EVEONLINE_CALLBACK_URI', ($variables && array_key_exists('EVEONLINE_CALLBACK_URI', $variables)) ? $variables['EVEONLINE_CALLBACK_URI'] : null),
    ],

    'recon_moon' => [
        'client_id' => env('RECON_MOON_CLIENT_ID', ($variables && array_key_exists('RECON_MOON_CLIENT_ID', $variables)) ? $variables['RECON_MOON_CLIENT_ID'] : null),
        'client_secret' => env('RECON_MOON_SECRET_ID', ($variables && array_key_exists('RECON_MOON_SECRET_ID', $variables)) ? $variables['RECON_MOON_SECRET_ID'] : null),
        'url' => env('RECON_MOON_URL', ($variables && array_key_exists('RECON_MOON_URL', $variables)) ? $variables['RECON_MOON_URL'] : null),
    ],

];
