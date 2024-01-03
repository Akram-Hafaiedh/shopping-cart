<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-500 p-4 text-white">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Shopping Cart With Livewire</h1>
                <nav class="text-white">
                    <a class="ml-4 font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        href="{{ route('welcome') }}" wire:navigate>Welcome</a>
                    <a class="ml-4 font-semibold hover:text-gray-900  dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        href="{{ route('shopping-cart') }}" wire:navigate>Shopping Cart</a>
                    {{-- <a href="/users" wire:navigate>Users</a> --}}
                </nav>
            </div>
        </header>

        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>

</html>