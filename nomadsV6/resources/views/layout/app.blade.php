<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    {{-- memanggil file css yang di definiskan di @push --}}
    @stack('prepend-style')

    {{-- memanggil file css pada folder includes --}}
    @include('includes.style')

    {{-- memangggil file css yang didefiniskan di @push --}}
    @stack('addon-style')

</head>
<body>
   @include('includes.navbar')
   {{-- @yiled('content') diambil dari folder pages/home.blade.php  isinya tampilan kontennya--}}
    @yield('content') 

    {{-- mengambil template footer di folder includes file footer.blade.php --}}
    @include('includes.footer')
    
    {{-- memanggil file js dan skirp xzoom yang didefinisikan di @push --}}
    @stack('prepend-script')

    {{-- memanggil file js dan skrip yang ada pada folder includes --}}
   @include('includes.script')

   {{-- memanggil file js dan skiro xzoom yang ada di @push --}}
   @stack('addon-script')
</body>
</html>