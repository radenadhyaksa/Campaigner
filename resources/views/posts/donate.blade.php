@extends('layouts.app')

@section('content')
    <h1>misal Post</h1>
    {!! Form::open(['action' => ['PostsController@payment', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        {!! Form::close() !!}

@endsection