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
    @include('layouting.layout login.head')
</head>
<body>

    @yield('content')

    <!-- Js -->
    @include('layouting.layout login.foot')

</body>
</html>
