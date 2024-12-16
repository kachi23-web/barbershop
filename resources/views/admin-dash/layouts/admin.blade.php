<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MasterCutz') }}</title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link rel="preconnect" href="https://fonts.googleapis.com/" />
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" />
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/simplebar/dist/simplebar.min.css')}}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.min.css')}}" />
      <!-- Analytics Code -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>

      <link rel="stylesheet" href="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.css')}}" />

   </head>

   <body>
      <main>
         <!-- start the project -->
         <!-- app layout -->
            <!-- start navbar -->
    
         @include('admin-dash.layouts.inc.nav')


         <div class="content">
          @yield('content')
        </div> 

         @include('admin-dash.layouts.inc.footer') 




  
  
           
            </div>
         </div>
         <!-- end of project -->
      </main>

      
   </body>

   <script src="{{ asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
      <script src="{{ asset('admin/assets/js/vendors/chart.js')}}" defer></script>
      <!-- Libs JS -->
      <script src="{{ asset('admin/assets/libs/feather-icons/dist/feather.min.js')}}" defer></script>
      <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}" defer></script>
      <script src="{{ asset('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

      <!-- Theme JS -->
      <script src="{{ asset('admin/assets/js/theme.min.js')}}"></script>

</html>
