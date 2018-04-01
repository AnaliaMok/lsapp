@extends('layouts/app')

@section('content')
  <h1>Create Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection

@section('scripts')
  <script>
    if(document.getElementById('article-ckeditor') != null){
      // CKEDITOR.destroy('article-ckeditor');
      //CKEDITOR.replace( 'article-ckeditor' );
      try {
        CKEDITOR.instances['article-ckeditor'].destroy(true);
      } catch (e) { }
        CKEDITOR.replace('article-ckeditor');
      }
  </script>
@endsection
