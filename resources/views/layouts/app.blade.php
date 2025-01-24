<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @livewireStyles


        <title>Upwork</title>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.2/dist/alpine.min.js" defer></script>
    </head>
    <body>
      <div class="container mx-auto px-4">
        @include('partials.navbar')
        @livewireScripts

      @yield('content')
      </div>

    </body>
</html>
