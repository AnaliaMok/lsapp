@extends('layouts/app')

@section('content')
  <a href="/posts" class="btn btn-secondary">Go Back</a>
  <h1 style="margin-top:1rem;">{{$post->title}}</h1>
  <img style="width:100%;" src="/storage/cover_images/{{ $post->cover_image }}" alt="Post Image">
  <br>
  <br>
  <div>
    {!! $post->body !!}
  </div>
  <hr style="margin-top:2rem;">
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>

  @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
      
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        <!-- Spoofing DELETE request -->
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
      {!! Form::close() !!}
    @endif
  @endif
@endsection