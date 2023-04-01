<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        </style>

        @livewireStyles
        <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    </head>
    <body class="relative font-sans antialiased">
        <x-banner/>

        <div class="min-h-screen bg-indigo-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                <div>
                    <x-layouts.sidebar>
                    </x-layouts.sidebar>
                    <div>
                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>
        @stack('modals')
        @livewireScripts

    </body>
</html>
