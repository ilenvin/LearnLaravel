<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eiLaravel</title>
    <style>
        h1 {
            color: rgb(150, 94, 206)
        }
        .container {
            display: grid;
            place-items: center;
        }
    </style>
    @yield('style')
    @stack('style')
</head>
<body>
    @yield('content')
    @yield('script')
    @stack('script')
</body>
</html>