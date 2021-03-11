<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Ex0000ample-app')}}</title>
        <!-- searches APP_NAME in .env foler and sets title if not there then sets Ex0000ample-app -->
      
      {{-- attachin bootstrap --}}
      {{-- resource->scss ->variable.scss_.changes the in terminal-> run dev_>reload --}}
{{-- for nor run dev use 'npm run watch' --}}
      {{-- script --}}
        <script src="{{asset('js/app.js')}}"defer></script>
        {{-- style --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    </head>
    <body>
        @include('inc.navbar')
        {{-- includes navbar file from inc folder --}}
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        

        <script>
        CKEDITOR.replace( 'editor' );
        </script>
    </body>
</html>
