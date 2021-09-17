<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @stack('prepend-style')
    @include('includes.user.style')
    @stack('addon-style')

    <title>@yield('title')</title>
</head>
<body>
    @include('includes.user.navbar-alternate')
    @yield('content')
    @include('includes.user.footer')

    @stack('prepend-script')
    @include('includes.user.script')
    @stack('addon-script')
</body>
</html>