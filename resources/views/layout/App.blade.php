{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags, CSRF token, etc. -->
    @auth
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    @endauth
    <!-- Compiled JavaScript -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Include your custom JavaScript file -->
    <script src="{{ asset('js/back-button-handler.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('styleForm.css') }}"> <!-- Assuming styleForm.css is in your public directory -->

    <!-- Other head elements -->
</head>

<body>
    <!-- Content -->

    @yield('content')

    <!-- Footer, additional scripts, etc. -->
</body>
</html> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags, CSRF token, etc. -->

    <!-- Compiled JavaScript -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Include your custom JavaScript file -->
    <script src="{{ asset('js/back-button-handler.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('styleForm.css') }}"> <!-- Assuming styleForm.css is in your public directory -->
    <!-- Other head elements -->
</head>
<body>
    <!-- Content -->

    @yield('content')

    <!-- Footer, additional scripts, etc. -->
</body>
</html>
