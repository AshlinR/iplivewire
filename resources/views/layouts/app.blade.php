<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ipLivewire') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="h-full antialiased">
    <x-jet-banner />

    <div class="flex-col w-full lg:flex lg:flex-row lg:min-h-screen">

        <div class="flex w-full h-full overflow-hidden antialiased text-gray-800 bg-white">

            @include('navigation.sidebar')

            <div class="flex flex-col flex-1">

                {{-- <livewire:nav.menu /> --}}

                @include('navigation.top')
                <!-- Content Container -->
                <main class="flex-1 border-t bg-gray-50" tabindex="0" x-init="$el.focus()">
                    <div>
                        @if (isset($header))
                            <div class="flex items-center h-16 p-2 mx-4 border-b">
                                <!-- Title -->
                                <h1
                                    class="text-lg font-semibold tracking-widest text-gray-900 uppercase dark-mode:text-white">
                                    {{ $header }}</h1>
                                <!-- End Title -->
                            </div>
                        @endif
                        <div class="flex-1 p-4 text-sm">
                            {{ $slot }}
                        </div>
                    </div>


                </main>
            </div>
        </div>
    </div>


    @stack('modals')

    @livewireScripts
</body>

</html>
