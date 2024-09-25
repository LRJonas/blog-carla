@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @auth
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    @endauth

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <ul class="post-list">
        @foreach ($posts as $post)
            <li class="post-item">
                <a href="{{ route('posts.show', $post->id) }}" class="post-link">{{ $post->title }}</a>
                <p>{{ \Illuminate\Support\Str::limit($post->content, 100, $end='...') }}</p>

                <h5> Atualizado em {{ $post->updated_at->format('d/m/Y') }} por Carla Horst</h5>
                @auth
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Delete</button>
                    </form>
                @endauth
            </li>
        @endforeach
    </ul>
@endsection
