<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <title>Arctic Food Admin</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Css -->
    {{-- @include('layouting.layout admin.head') --}}
</head>
<body class="app">
    @include('layouting.layout admin.header')
    @include('layouting.layout admin.sidebar')
     
    <div class="app-wrapper">
    @yield('content')

    @include('layouting.layout admin.footer')
    </div>

    <!-- Js -->
    @include('layouting.layout admin.foot')
</body>
</html>
