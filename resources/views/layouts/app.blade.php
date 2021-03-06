<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Rapido')}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    @include('layouts._nav')
    @if (session('ad.create.success'))
        <div class="mb-0 text-accent bg-seccondary border-bottom fs-4">{{session('ad.create.success')}}</div>
    @endif
    @if (session('access.denied.revisor.only'))
        <div class="alert alert-danger mb-0">{{session('access.denied.revisor.only')}}</div>
    @endif
    @yield('content')
    @include('layouts._modal')
    @include('layouts._footer')
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
  </body>
</html>