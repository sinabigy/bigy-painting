<!DOCTYPE html>
<html lang="{{ \Illuminate\Support\Str::of(app()->getLocale())->lower()->kebab() }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    @stack('scripts')
</head>

<body x-data="{ isOpen: false }" class="antialiased">
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <header class="relative">
                <div class="bg-gray-900 pt-6">
                    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                        aria-label="Global">
                        <div class="flex items-center flex-1">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#">
                                    <span class="sr-only">Bigy Painting</span>
                                    <img
                                        src={{asset('assets/images/logo-white.png')}} alt="Bigy Painting">

                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button" @click="isOpen = !isOpen" x-show="!isOpen"
                                        class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                        aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="hidden space-x-8 md:flex md:ml-10">
                                <a href="/" class="text-base font-medium text-white hover:text-gray-300">Home</a>

                                <a href="/#about" class="text-base font-medium text-white hover:text-gray-300">About</a>

                                <a href="/portfolio" class="text-base font-medium text-white hover:text-gray-300">Portfolio</a>

                                <a href="/#services" class="text-base font-medium text-white hover:text-gray-300">Services</a>

                                <a href="/#contact" class="text-base font-medium text-white hover:text-gray-300">Contact</a>
                            </div>
                        </div>
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            <a href="#" class="text-base font-medium text-white hover:text-gray-300"> Log in </a>
                        </div>
                    </nav>
                </div>

                <!--
              Mobile menu, show/hide based on menu open state.

              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
                <div x-cloak x-show="isOpen" x-transition:enter="duration-150 ease-out"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark-teal-500-cyan-600.svg" alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button" @click="isOpen = !isOpen"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="pt-5 pb-6">
                            <div class="px-2 space-y-1">

                                <a href="/"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Home</a>

                                <a href="/#about"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About</a>

                                <a href="/portfolio"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Portfolio</a>

                                <a href="/#services"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

                                    <a href="/#contact"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Contact</a>
                            </div>
                            <div class="mt-6 px-5">
                                <a href="#"
                                    class="block text-center w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700">Start
                                    free trial</a>
                            </div>
                            <div class="mt-6 px-5">
                                <p class="text-center text-base font-medium text-gray-500">Existing customer? <a
                                        href="#" class="text-gray-900 hover:underline">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            {{ $slot }}
        </div>
    </div>

</body>

</html>
