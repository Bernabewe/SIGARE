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
            <div style="box-shadow: 26px 29px 0px -10px rgba(0,0,0,0.33);border-radius: 15px 15px 15px 15px;">
                <div class="w-300 h-500  mt-5 px-5 py-1 bg-white shadow-md-color-red sm:rounded-lg" >
                    <a href="/">
                        <img style= "width: 400px; height: 120px;" src= "{{asset('/img/LogoDG.png')}}" />
                    </a><br>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
