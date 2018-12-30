<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
        <title>{{ config("app.name","bbbb") }}</title>
        
    </head>
    <body dir="rtl">
        <div id="app">
        @include('inc/navbar')
     <div class="container"> 
         @include('inc/messeges')  
       @yield('content')
     </div>
        </div>
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( '#article-ckeditor' );
     </script>
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
