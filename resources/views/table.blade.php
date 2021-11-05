<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
    <body class="font-sans antialiased">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header class="bg-indigo-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="#">
                        <span class="sr-only">BACK-END DEVELOPPER</span>
                        <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">
                            Front-end
                        </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Pricing">
                            Back-end
                        </a>

                        <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Docs">
                            Full-stack
                        </a>
                    </div>
                </div>
                <div class="ml-10 space-x-4">
                    <a href="#" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Connexion</a>
                    <a href="#" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Inscription</a>
                </div>
            </div>
            <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
                <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">
                    Solutions
                </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Pricing">
                    Pricing
                </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Docs">
                    Docs
                </a>

                <a href="#" class="text-base font-medium text-white hover:text-indigo-50" key="Company">
                    Company
                </a>
            </div>
        </nav>
    </header>
    <main>
        <livewire:user-table/>
    </main>
   @livewireScripts
</body>
</html>
