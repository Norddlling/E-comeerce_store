<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased container-lg " >
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 position-relative ">
            <header>
                @auth()
                    @include('layouts.navigation')
                @endauth
                @if (!Auth::user())
                    <x-e-shop-front.login-menu/>
                @endif
            </header>

            <main class="main">
                {{ $slot }}
            </main>
            
            <footer class="position-absolute bottom-0 w-100" >
                <x-e-shop-front.footer class=""/>
            </footer>
        </div>
    </body>
</html>

<style>
    .main {
        padding-bottom: 80px;
    }

    @media screen and (max-width: 610px) {
        .main {
            padding-bottom: 100px;
        }
    }
</style>