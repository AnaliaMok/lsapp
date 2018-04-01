@extends('layouts/app')

@section('content')
  <h1>Posts</h1>
  @if( count($posts) > 0 )
    @foreach($posts as $post)
      <div class="card card-block bg-faded" style="padding:1rem;margin-bottom:1rem;">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img style="width:100%;" src="/storage/cover_images/{{ $post->cover_image }}" alt="Post Image">
          </div>
          <div class="col-md-8 col-sm-8">
            <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          </div>
        </div>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No Posts</p>
  @endif
@endsection