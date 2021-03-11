{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Ex0000ample-app')}}</title>
        <!-- searches APP_NAME in .env foler and sets title if not there then sets Ex0000ample-app -->
    </head>
    <body> --}}

 @extends('Layouts.app')

@section('content')
    <h1> {{$title}}</h1>
    {{-- sets dynamic title from Pages controller->funct services->array->title --}}
    @if(count($services)>0)
    {{-- array is passing through with func to pages/services & collecting here --}}
        <ul class="list-group">
            @foreach($services as $s)  

                <li class="list-group-item">{{$s}}</li>
            @endforeach
        </ul>
    @endif
  @endsection
    {{-- </body> 
</html>
--}}