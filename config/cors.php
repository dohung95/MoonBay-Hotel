<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],  // Các phương thức bạn muốn cho phép

    'allowed_origins' => [
        'https://your-frontend-domain.com', // Thay đổi domain frontend của bạn
        'https://laravel-react-app-wgss.onrender.com' // Domain của ứng dụng backend
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'Authorization', 'X-Requested-With'],  // Các header bạn muốn cho phép

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,  // Nếu bạn sử dụng cookie hoặc xác thực
];

