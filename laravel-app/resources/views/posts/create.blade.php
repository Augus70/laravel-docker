@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Crear Post</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <x-alert type="danger" title="Error" :languajes="$languajes">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-alert>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                {{-- title --}}
                <input type="text" name="title" class="form-control mb-2" placeholder="Titulo" value="{{ old('title') }}">
                {{-- content --}}
                <textarea name="content" class="form-control mb-2" placeholder="Contenido">{{ old('content') }}</textarea>
                {{-- submit --}}
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
    </div>
