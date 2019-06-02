<?php

return [
    'properties' => [
        'title' => "Vastgoed",
        'module' => true,
        'primary_navigation' => [
            'overzicht' => [
                'title' => 'Overzicht',
                'route' => 'admin.properties.index',
            ],
            'propertyTypes' => [
                'title' => 'Vastgoed types',
                'route' => 'admin.content.propertyTypes.index',
            ],
            'countries' => [
                'title' => 'Landen',
                'route' => 'admin.content.countries.index',
            ],
            'cities' => [
                'title' => 'Steden',
                'route' => 'admin.content.cities.index',
            ]
            
        ],
    ],
    'services' => [
        'title' => 'Diensten',
        'module' => true,
    ],
    'pages' => [
        'title' => "Pagina's",
        'module' => true
    ]
];
