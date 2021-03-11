@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go back</a>
  <h1>{{$post->title}}</h1>
  <div>
    {!!$post->body!!}
</div>
 <small>Written on {{$post->created_at}}</small>
 <hr>
 <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>





 {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
  {{Form::hidden('_method','DELETE')}}
  
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
 {!!Form::close()!!}

@endsection

{{-- {!! for parsing html!!} --}}