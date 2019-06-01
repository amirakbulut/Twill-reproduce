@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'images',
        'label' => 'Afbeeldingen',
        'max' => 10
    ])
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 1000,
        'editSource' => true,
    ])
    @formField('input', [
        'name' => 'adres',
        'label' => 'Vastgoed adres',
        'required' => true
    ])
    @formField('select', [
        'name' => 'country',
        'label' => 'Land',
        'placeholder' => 'Selecteer een land',
        'required' => true,
        'options' => [
                [
                    'value' => 1,
                    'label' => 'Nederland'
                ],
                [
                    'value' => 2,
                    'label' => 'Turkije'
                ]
            ]
        ]
    )
    @formField('select', [
        'name' => 'property_type',
        'label' => 'Vastgoed type',
        'placeholder' => 'Kies een type',
        'required' => true,
        'options' => [
                [
                    'value' => 1,
                    'label' => 'Woning'
                ],
                [
                    'value' => 2,
                    'label' => 'Appartement'
                ],
                [
                    'value' => 3,
                    'label' => 'Duplexwoning'
                ],
                [
                    'value' => 3,
                    'label' => 'Villa'
                ],
                [
                    'value' => 3,
                    'label' => 'Bedrijfspand'
                ]
                
            ]
        ]
    )
    @formField('input', [
        'name' => 'bedrooms',
        'label' => 'Aantal slaapkamers',
        'type' => 'number',
        'required' => true
    ])
    @formField('input', [
        'name' => 'bathrooms',
        'label' => 'Aantal badkamers',
        'type' => 'number',
        'required' => true
    ])
    @formField('input', [
        'name' => 'space',
        'label' => 'Aantal vierkante meters',
        'type' => 'number',
        'required' => true
    ])
    @formField('input', [
        'name' => 'garages',
        'label' => 'Aantal garages',
        'type' => 'number',
        'required' => true
    ])
    @formField('select', [
        'name' => 'sales_type',
        'label' => 'Verkoop type',
        'placeholder' => 'Selecteer een type',
        'required' => true,
        'options' => [
                [
                    'value' => 1,
                    'label' => 'Verkoop'
                ],
                [
                    'value' => 2,
                    'label' => 'Verhuur'
                ]
            ]
        ]
    )
    @formField('input', [
        'name' => 'discount',
        'label' => 'Korting in euros',
        'type' => 'number'
    ])
    @formField('input', [
        'name' => 'price',
        'label' => 'Vastgoed prijs',
        'type' => 'number',
        'required' => true
    ])
    @formField('block_editor', [
        'blocks' => ['property_features']
    ])
@stop
