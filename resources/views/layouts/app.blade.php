<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('css/mdb.min.css')}}" rel="stylesheet" type="text/css" id="mdb" >
    <link href="{{ asset('css/plugins.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/coloring.css')}}" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>
<body class="dark-scheme">
<div id="wrapper">


        @include('layouts.inc.header')

        <div class="content">
          @yield('content')
        </div>

        @include('layouts.inc.footer')

  </div>
  </div>




    <script src="{{ asset('js/plugins.js') }}" defer></script>
    <script src="{{ asset('js/designesia.js') }}" defer></script>
    <script src="{{ asset('js/custom-marquee.js') }}"defer ></script>
   
    
    
    
  @if(session('status'))
    <script>
      swal("{{ session('status') }}");
    </script>
    @endif
  @yield('scripts')

  
  
</body>
</html>
