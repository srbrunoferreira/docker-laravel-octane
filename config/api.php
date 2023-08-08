<?php

/**
 * Defines settings for external APIs.
 */

return [
    'postcode' => [
        'br' => [
            'base_url' => env('BR_POSTCODE_API_BASE_URL')
        ],
        'pt' => [
            'base_url' => env('PT_POSTCODE_API_BASE_URL')
        ]
    ]
];
