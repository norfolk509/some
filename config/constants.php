<?php
    return [
        'meta-service' => [
            'aggregate' => [
                'aggType' => [
                    'top' => 0,
                    'newest' => 1,
                    'recommended' => 2
                ],
                'gameType' => [
                    'all' => 0,
                    'web' => 1,
                    'download' => 2
                ],
                'gamePlatform' => [
                    "all" => 0,
                    "pc" => 1,
                    "android" => 1
                ],
                'site' => [
                    'general' => 0,
                    'adult' => 1
                ]
            ]
        ],

        //currency symbol type
        'symbolType' => [
            // €(EURO)
            'EURO' => [
                'AD', // Andorra
                'AT', // Austria
                'BE', // Belgium
                'CY', // Cyprus
                'DK', // Denmark
                'EE', // Estonia
                'FI', // Finland
                'FR', // France
                'DE', // Germany
                'GR', // Greece
                'IE', // Ireland
                'IT', // Italy
                'LV', // Latvia
                'LU', // Luxembourg
                'MT', // Malta
                'MC', // Monaco
                'ME', // Montenegro
                'NL', // Netherlands
                'NO', // Norway
                'PT', // Portugal
                'SM', // San Marino
                'SK', // Slovakia
                'SI', // Slovenia
                'ES', // Spain
                'VA', // Holy See (Vatican City State)
            ],
            // £(GBP),
            'GBP' => [
                'GB', // United Kingdom
            ],
        ]
    ];