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
        <link rel="stylesheet" href="{{ asset('FinanceApp/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('FinanceApp/css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('FinanceApp/css/pages/auth.css')}}">

        <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/iconly/bold.css') }}">

        <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('FinanceApp/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('FinanceApp/images/favicon.svg') }}" type="image/x-icon">
    
        

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

    <script src="{{ asset('FinanceApp/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('FinanceApp/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('FinanceApp/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('FinanceApp/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('FinanceApp/js/main.js') }}"></script>
    </body>
</html>
