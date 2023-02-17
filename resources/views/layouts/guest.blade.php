<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-red-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-300">

            
            <div class="w-100 h-200  mt-8 px-8 py-1 bg-white shadow-md-color-red sm:rounded-lg" style="box-shadow: 2px 3px #903434;">
                <a href="/">
                    <img class= "w-75 h-25" src= "{{asset('/img/Logo.png')}}" />
                </a><br>
                {{ $slot }}
                
                
            </div>
            </div>
        </div> 
    </body>
</html>
