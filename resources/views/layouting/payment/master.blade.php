<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="MediaCenter, Template, eCommerce" />
    <meta name="robots" content="all" />

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Css -->
    @include('layouting.payment.head')
</head>
<body class="cnt-home">

    @include('layouting.payment.header')

    @yield('content')

    <!-- Js -->
    @include('layouting.payment.footer')
    @include('layouting.payment.foot')

</body>
</html>
