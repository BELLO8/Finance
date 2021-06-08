<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('FinanceApp/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('FinanceApp/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('FinanceApp/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('FinanceApp/images/favicon.svg') }}" type="image/x-icon">
    @stack('css')
</head>

<body>
    <div id="app">

        @include('Layouts.Parties.sideBar')

        @yield('content')

    </div>
    <script src="{{ asset('FinanceApp/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('FinanceApp/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('FinanceApp/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('FinanceApp/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('FinanceApp/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
