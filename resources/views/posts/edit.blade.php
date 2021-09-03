@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>

    {!! Form::open(['method' => 'PUT', 'enctype' => 'multipart/form-data', 'style' => 'display:inline', 'action' => ['App\Http\Controllers\PostController@update', $post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}

        {!! Form::label('content', 'Content:') !!}
        {!! Form::text('content', $post->content, ['class' => 'form-control']) !!}
        <br>
        {!! Form::file('file', ['class' => 'form-control']) !!}
        {!! Form::label('file', $post->path) !!}
        <br>
        <img height="40" src="/files/{{ $post->path }}" alt="">
    </div>
    <br>
    {!! Form::button('<span class="fas fa-edit"></span>', ['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'UPDATE']) !!}
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline-block', 'action' => ['App\Http\Controllers\PostController@destroy', $post->id]]) !!}
    {!! Form::button('<span class="fas fa-trash"></span>', ['type' => 'submit', 'value' => 'DELETE', 'class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


    {{-- <form style='display:inline-block;' method="POST" action="/posts/{{ $post->id }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}">
        <input type="submit" name="update" value="UPDATE">
    </form>

    <form style='display:inline-block;' method="POST" action="/posts/{{ $post->id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="delete" value="DELETE">
    </form> --}}


@endsection
