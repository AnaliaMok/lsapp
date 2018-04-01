@extends('layouts/app')

@section('content')
  <a href="/posts" class="btn btn-secondary">Go Back</a>
  <h1 style="margin-top:1rem;">{{$post->title}}</h1>
  <div>
    {!! $post->body !!}
  </div>
  <hr style="margin-top:2rem;">
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
  
  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    <!-- Spoofing DELETE request -->
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection