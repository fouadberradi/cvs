<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
  

    <link href="{{ asset('css/tem.css') }}" rel="stylesheet" type="text/css"> 
   <!-- <link href=href="//bootswatch.com/4/flatly/bootstrap.min.css" rel="stylesheet"> 
-->

<style type="text/css">
    
    
</style>
</head>
<body>
    <div id="app">
        @include('partials.menu')
        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     @include('partials.flash')
                </div>
            </div>
        </div>
        


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
