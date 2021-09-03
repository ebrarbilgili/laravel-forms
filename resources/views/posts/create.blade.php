@extends('layouts.app')

@section('content')
    <h1>Create</h1>
    {{-- <form method="post" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="Enter title">
        <input type="submit" name="submit">
    </form> --}}

    {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\PostController@store', 'files' => 'true']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        {!! Form::label('content', 'Content:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::file('file', ['class' => 'form-control']) !!}
    </div>
    <br>
    {!! Form::button('<span class="fas fa-plus-circle"></span>', ['type' => 'submit', 'class' => 'btn btn-info']) !!}
    {!! Form::close() !!}

    <br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
