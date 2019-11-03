@extends('postview.main')
@section('content')
@foreach($posts->all() as $post)
 <div class="post-preview">
          <a href="{{route('fullpost',[$post->id, str_slug("$post->title","-")])}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
              {{substr("$post->description",0,5)}}
            </h3>
          </a>
          <p class="post-meta">Post Creation Time
            <a href="#">{{$post->created_at}}</p>
        </div>
@endforeach
@endsection