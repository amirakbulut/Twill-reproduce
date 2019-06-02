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
    ])
    @formField('input', [
        'name' => 'adres',
        'label' => 'Locatie/Adres',
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
    </br>
    <a17-fieldset title="Vastgoed type" id="related" :open="true">
        @formField('browser', [
            'routePrefix' => 'content',
            'moduleName' => 'propertyTypes',
            'name' => 'propertyTypes',
            'label' => 'Vastgoed type',
            'max' => 20,
            'translated' => true
        ])
    </a17-fieldset>
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
@stop
