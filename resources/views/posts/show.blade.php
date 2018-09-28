@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>


    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    
    <hr>
    

        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default pull-left">Edit</a>

        @if(!Auth::guest())
            <a href="/posts/{{$post->id}}/donasi" class="btn btn-danger pull-right">DONASI</a>
            

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
            {!!Form::close()!!}

        @endif
    @endif
@endsection
