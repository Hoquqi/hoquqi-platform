<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

// return [
//     'mode'    => env('PAYPAL_MODE'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
//     'sandbox' => [
//         'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID'),
//         'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
//         'app_id'            => env('PAYPAL_SANDBOX_APP_ID'),
//     ],
//     'live' => [
//         'client_id'         => env('PAYPAL_LIVE_CLIENT_ID'),
//         'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET'),
//         'app_id'            => env('PAYPAL_LIVE_APP_ID'),
//     ],

//     'payment_action' => 'Order', // Can only be 'Sale', 'Authorization' or 'Order'
//     'currency'       => env('PAYPAL_CURRENCY' , 'USD'),
//     'notify_url'     => env('PAYPAL_NOTIFY_URL'), // Change this accordingly for your application.
//     'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
//     'validate_ssl'   => false, // Validate SSL when creating api client.
// ];


return [
    'mode'    => 'sandbox', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => 'AVAys_93UcOe-PvPzh8HbrUU752Kerhw5VPQdthvRtPv2gzON4XUqHOccAWJSV7IQ0VjvhxVFZFkOGK5',
        'client_secret'     => 'EApSn9PsIRqDm7gvvG4QmGLX6OtQUoEfu5cZQ3dAK5nA7nYXmp1vFpJwsDY8F2vbyZkD_PQGGOqDC8ee',
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => '',
        'client_secret'     => '',
        'app_id'            => '',
    ],

    'payment_action' => 'Order', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];
