@extends('layouts.app')

@section('content')
    <h1>misal Post</h1>
    {!! Form::open(['action' => ['PostsController@payment', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nama', 'Nama Pendonasi :')}}
            {{Form::text('nama', $post->nama, ['class' => 'form-control', 'placeholder' => 'Nama'])}}
        </div>

        <div class="form-group">
            {{Form::label('tlp', 'Nomor tlp/handphone')}}
            {{Form::text('tlp', $post->tlp, ['class' => 'form-control', 'placeholder' => 'Nomor tlp'])}}
        </div>
        {!! Form::close() !!}

        <div class="form-group">
            {{Form::label('alamat', 'Alamat')}}
            {{Form::text('alamt', $post->alamat, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

          <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $post->email, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

          <div class="form-group">
            {{Form::label('jml_tf', 'Jumlah Transfer')}}
            {{Form::text('jml_tf', $post->jml_tf, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

        <div class="form-group">
            {{Form::label('no_tf', 'Nomor Rekening')}}
            {{Form::text('no_tf', $post->no_tf, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

         <div class="form-group">
         {{Form::label('bukti_tf', 'Upload Bukti Transfer :')}}
         {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection