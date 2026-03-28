@extends('layouts.landing')

@section('title', 'Service')

@section('content')
    <h1>Service</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor sit.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum dolor sit.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum dolor sit.')
    @endcomponent
@endsection
