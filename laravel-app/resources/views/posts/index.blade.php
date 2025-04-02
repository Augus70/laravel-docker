@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Lista de Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
