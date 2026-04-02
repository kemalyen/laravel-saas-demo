<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
      
 
    <div class="mx-auto max-w-6xl">
        <div class="sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
        @fluxScripts
    </body>
</html>
