<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => 'live', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => '',
        'client_secret'     => '',
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => 'AWRjdqo2EQa2Tmo6fIXEnaXlo_XbByhzMpUCX8w2FnZg3Engv9SpUo4ceq6kQ_5ndcXn-5fOqDbEN41q',
        'client_secret'     => 'EFzYnsvMiXLT6cJ61uYSTylGeR77ObxO2ku0Qd0pmp1ff7umjQMV8cwyLxQrcKG4UtirhMnKG1Lnrunt',
        'app_id'            => '',
    ],

    'payment_action' => 'Order', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => 'en_US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];
