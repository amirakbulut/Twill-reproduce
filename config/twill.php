<?php

return [
    'block_editor' => [
        'blocks' => [
            'header' => [
                'title' => 'Header',
                'icon' => 'text',
                'component' => 'a17-block-header',
            ],
            'welcome' => [
                'title' => 'Welcome',
                'icon' => 'text',
                'component' => 'a17-block-welcome',
            ],
            'services' => [
                'title' => 'Diensten overzicht',
                'icon' => 'text',
                'component' => 'a17-block-services',
            ],
            'properties' => [
                'title' => 'Vastgoed overzicht (not working)',
                'icon' => 'text',
                'component' => 'a17-block-properties',
            ]
        ],
        'browser_route_prefixes' => [
            'services' => 'content',
            'properties' => 'content',
            'propertyTypes' => 'content',
        ],
    ]
];
