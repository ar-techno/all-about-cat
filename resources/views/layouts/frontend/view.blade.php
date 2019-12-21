<!DOCTYPE html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the price table -->
    <meta name="Petshop" content="yes">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the price table style -->
    <meta name="Petshop" content="black">
    <!-- set the description -->
    <meta name="description" content="All About Cats">
    <title>All About Cats</title>
    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
    <link rel="icon" href="{{url('favicon')}}" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/icon-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css')}}">
    @stack('style')
</head>
<body>
    @yield('content')
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    @stack('script')
</body>
</html>