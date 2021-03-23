<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="ChizyTony | OneGeco Systems">

        <title>NIIT Enugu | @yield('title')</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet"/>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <link rel="icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/icofont.css')}}">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/themify.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/flag-icon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/feather-icon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/chartist.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/owlcarousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/prism.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
        <link id="color" rel="stylesheet" href="{{asset('/css/color-1.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/photoswipe.css')}}">
        <script src="https://kit.fontawesome.com/d3c5f82d85.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/vendors/datatables.css')}}">



    </head>
    <body>
        <div>
            <div class="tap-top"><i data-feather="chevrons-up"></i></div>
            @yield('content')
        </div>
        <script src="{{asset('/js/app.js')}}"></script>
        <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('/js/icons/feather-icon/feather.min.js')}}"></script>
        <script src="{{asset('/js/icons/feather-icon/feather-icon.js')}}"></script>
        <script src="{{asset('/js/config.js')}}"></script>
        <script src="{{asset('/js/script.js')}}"></script>
        <script src="{{asset('/js/scrollbar/simplebar.js')}}"></script>
        <script src="{{asset('/js/scrollbar/custom.js')}}"></script>
        <script src="{{asset('/js/config.js')}}"></script>
        <script src="{{asset('/js/sidebar-menu.js')}}"></script>
        <script src="{{asset('/js/chart/chartist/chartist.js')}}"></script>
        <script src="{{asset('/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
        <script src="{{asset('/js/chart/apex-chart/apex-chart.js')}}"></script>
        <script src="{{asset('/js/chart/apex-chart/stock-prices.js')}}"></script>
        <script src="{{asset('/js/prism/prism.min.js')}}../assets/js"></script>
        <script src="{{asset('/js/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('/js/counter/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('/js/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('/js/counter/counter-custom.js')}}"></script>
        <script src="{{asset('/js/custom-card/custom-card.js')}}"></script>
        <script src="{{asset('/js/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('/js/dashboard/dashboard_2.js')}}"></script>
        <script src="{{asset('/js/photoswipe/photoswipe.min.js')}}"></script>
        <script src="{{asset('/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
        <script src="{{asset('/js/photoswipe/photoswipe.js')}}"></script>
        <script src="{{asset('/js/tooltip-init.js')}}"></script>
        <script src="{{asset('/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/js/datatable/datatables/datatable.custom.js')}}"></script>
    </body>
</html>