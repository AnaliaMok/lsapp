@extends('layouts/app')

@section('content')
  <h1>Posts</h1>
  @if( count($posts) > 0 )
    @foreach($posts as $post)
      <div class="card card-block bg-faded" style="padding:1rem;margin-bottom:1rem;">
        <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>{{$post->created_at}}</small>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No Posts</p>
  @endif
@endsection