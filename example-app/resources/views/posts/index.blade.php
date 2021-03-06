@extends('layouts.app')

@section('content')
  <h1>posts</h1>
  @if(count($posts)>0)
@foreach ($posts as $post)
    <div class="well">
        
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>written on {{$post->created_at}}</small>
    </div> 
@endforeach
{{$posts->links('pagination::bootstrap-4')}}
  @else
    <p>No posts found</p>
  @endif
@endsection