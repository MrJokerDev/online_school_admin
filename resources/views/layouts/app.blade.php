<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Online school Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Scripts -->
        @yield('link')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        .dark{
            background-color: rgb(75 85 99 / var(--tw-bg-opacity))
        }
    </style>
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
            if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            localStorage.setItem('darkMode', JSON.stringify(true));
            }
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

        <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">
            
            @include('layouts.navigation')
            <div class="p-4 sm:ml-64">
                <div class="p-4 mt-14">
                    @include('components.breadcamp')
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white dark:bg-gray-800 shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    {{ $slot }}
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        
        <script type="text/javascript">
        
            $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });
        
        </script>
    </body>
</html>
