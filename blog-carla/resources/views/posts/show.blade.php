@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="content-container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p><strong>Data de Criação:</strong> {{ $post->created_at->format('d/m/Y') }}</p>
        <p><strong>Última Atualização:</strong> {{ $post->updated_at->format('d/m/Y') }}</p>
        <a href="{{ route('posts.index') }}">Voltar para a lista de posts</a>
    </div>
@endsection
