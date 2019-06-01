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
            'property_features' => [
                'title' => 'Woning kenmerken',
                'icon' => 'text',
                'component' => 'a17-block-property_features',
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
        'repeaters' => [
            'property_features_item' => [
                'title' => 'Kenmerk',
                'trigger' => 'Kenmerk toevoegen',
                'component' => 'a17-block-property_features_item',
                'max' => 20
            ]
        ],
        'browser_route_prefixes' => [
            'services' => 'content',
            'properties' => 'content',
        ],
    ]
];
