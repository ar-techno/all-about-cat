<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>@yield('title')</title>
<link rel="icon" href="{{url('favicon')}}" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/plugins/sweetalert/sweetalert.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/color_skins.css')}}">

@stack('style')
@stack('scripthead')
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('backend/assets/images/logo.svg')}}" width="48" height="48" alt="AAC"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Header -->
 @include('layouts/backend/main/header')
<!-- end header -->
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>@yield('header')
                <small>@yield('subheader')</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> AAC</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('bread')</a></li>
                </ul>
            </div>
        </div>
    </div>
@yield('content')
</section>
<!-- end Content -->

<!-- Jquery Core Js --> 
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js)  -->
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

@stack('scriptbottom')
<script src="{{ asset('backend/assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/pages/ui/dialogs.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>

</body>
</html>