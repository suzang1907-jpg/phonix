<?php

return [
    'enabled' => env('GOOGLE_ENABLED', true),
    'property_id' => env('GOOGLE_PROPERTY_ID', null),
    'client_credentials' => env('GOOGLE_CLIENT_CREDENTIALS', storage_path('app/private/global/google-credentials.json')),
    'service_credentials' => env('GOOGLE_SERVICE_CREDENTIALS', storage_path('app/private/global/google-service-credentials.json')),
    'client_id' => env('GOOGLE_CLIENT_ID'),
];
