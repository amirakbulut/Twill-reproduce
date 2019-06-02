@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'type' => 'textarea',
        'maxlength' => 150
    ])
    @formField('block_editor', [
        'blocks' => ['header', 'welcome', 'services', 'properties']
    ])
@stop
