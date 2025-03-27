@extends('layout.app')
@section('title', 'Este es el titulo desde child')
@section('content')
    <h1>Este es el contenido desde child</h1>
    <p>Y el nombre recibido es {{ $name }}</p>
    @component('components.alert', ['type' => 'danger'])
        @slot('title')
            Titulo de alerta
        @endslot
        <strong>Whoops!</strong> Something went wrong alert component!
    @endcomponent
@endsection