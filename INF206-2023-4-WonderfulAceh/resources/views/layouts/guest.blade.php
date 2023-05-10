<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    
        <style>
      .my-box {
        background-color: #306A6A;
        border-radius: 10px;
        padding: 50px 50px; /* Sesuaikan nilai padding kiri-kanan dan atas-bawah */
        margin: 100px 20px; /* Sesuaikan nilai margin kiri-kanan dan atas-bawah */
        display: flex;
        flex-direction: column;
      }
    </style>
    
    </head>
    
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-cover bg-center" style="background-image: url(https://www.toursabang.co.id/wp-content/uploads/2022/03/pantai.gif)">
            <img src="img/logowondeful.png" style="height: 50%; width: 7%;">
            <a href="../../index2.html" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                Wonderful Aceh
            </a>

    </body>
    <main>
    <div class="my-box">
  {{ $slot }}
</div>

    </main>
</html>
