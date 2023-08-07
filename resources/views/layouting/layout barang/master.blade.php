<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Css -->
    @include('layouting.layout barang.head')
</head>
<body>
    @include('layouting.layout barang.header')

    @yield('content')

    <!-- Js -->
    @include('layouting.layout barang.footer')

</body>
</html>
