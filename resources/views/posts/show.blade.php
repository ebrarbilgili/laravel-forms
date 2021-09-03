@extends('layouts.app')

@section('content')

    <h1><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></h1>
    <p>{{ $post->id }}</p>
    <a href="http://localhost:8000/files/{{ $post->path }}">Show Image</a>
@endsection
