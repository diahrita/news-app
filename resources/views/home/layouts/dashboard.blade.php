<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diah | NextPage</title>
    
    <!-- favicon -->
    <link rel=icon href="{{asset('news-assets/img/favicon.png')}}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('news-assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('news-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('news-assets/css/responsive.css')}}">

</head>
<body>

    @include('home.layouts.header')
    <!-- banner area start -->
    @include('home.layouts.banner')
    <!-- banner area end -->
    @yield('content') 

   @include('home.layouts.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="{{asset('news-assets/js/vendor.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('news-assets/js/main.js')}}"></script>
</body>
</html>