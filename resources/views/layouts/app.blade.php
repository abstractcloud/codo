<!DOCTYPE html>
<html lang="EN">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">

    <title>@yield('title')</title>
    <meta content="@yield('description')" name="description">
    <meta content="PHP18-5 Team" name="author">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/metismenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/channel.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.partials.topbar')

        @include('layouts.partials.sidebar')

        <!-- ================== MAIN CONTENT ==================== -->

        <div class="content-page">
        @yield('content')
        
        @include('layouts.partials.footer')
        </div>

        <!-- ================ MAIN CONTENT END ================== -->
        
    </div><!-- END wrapper -->

<!-- jQuery  -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/waves.min.js') }}"></script>
<!--Chartist Chart-->
<script src="{{ asset('js/chartist.min.js') }}"></script>
<script src="{{ asset('js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ asset('js/jquery.peity.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

<script src="{{ asset('js/front.js') }}"></script>

</body>
</html>
