<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body >
        <div id="app">

            <section class="px-8 py-4">
                <header class="container mx-auto">
                    <h1>
                        <img src="/images/logo.svg" alt="tweety">
                    </h1>
                </header>
            </section>

            <section class="px-8">
                <main class="container mx-auto">

                {{-- Sidebar --}}
                    <div class="flex justify-between">
                        @if(auth()->check())
                            <div class="w-32" >
                                @include('tweety.sidebar-links')
                            </div>
                        @endif

                {{-- main body --}}
                        <div class="flex-1 " style="padding:0 4rem; max-width:750px;">
                            @yield('content')
                        </div>

                {{-- Friends --}}
                        @if(auth()->check())
                            <div class="bg-gray-200 rounded-lg px-4 py-4" style="width:16%;height:16%;  background-color: #f3f4f6;">
                                @include('tweety.friends-list')
                            </div>
                        @endif

                    </div>
                </main>

            </section>






        </div>


    </body>
</html>
