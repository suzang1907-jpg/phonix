<?php

return [
    'enabled' => env('GOOGLE_ENABLED', true),
    'client_credentials' => env('GOOGLE_CLIENT_CREDENTIALS', storage_path('app/private/global/google-credentials.json')),
    'client_id' => env('GOOGLE_CLIENT_ID'),
];
