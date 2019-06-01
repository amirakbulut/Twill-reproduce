@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'type' => 'textarea',
        'name' => 'description',
        'label' => 'SEO Pagina beschrijving',
        'rows' => 4
    ])
    
    @formField('block_editor')
@stop
