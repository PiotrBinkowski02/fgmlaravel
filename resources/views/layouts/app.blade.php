<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description')">
    <!-- Include your CSS and JS files -->
</head>
<body>
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
</body>
</html>