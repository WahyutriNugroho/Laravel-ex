
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.user.style')
</head>
<body>
     <!-- Navbar -->
    @include('includes.user.navbar-alternate')
    @yield('content')

    @include('includes.user.script')
</body>
</html>