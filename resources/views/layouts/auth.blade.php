<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('resources/images/logo-sm.svg')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="box-border @yield('background-color')">
    <main class="px-16">
        @yield('content')
    </main>
    <script src="{{asset('resources/js/modal.js')}}"></script>
</body>
</html>