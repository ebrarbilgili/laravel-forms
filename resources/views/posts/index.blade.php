@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    <a class="btn btn-primary" href="/posts/create">Create</a>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }} ,
                    {{ $post->content == null ? 'null' : $post->content }} ({{ $post->id }})</a>
                <form style='display:inline-block;' method="POST" action="">
                    <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}" value="POST" type="button"><span
                            class="fas fa-edit"></span></a>
                </form>
                <form style='display:inline-block;' method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit" name="delete" value="DELETE"><span
                            class="fas fa-trash"></span></button>
                </form>
            </li>
        @endforeach
    </ul>

@endsection
