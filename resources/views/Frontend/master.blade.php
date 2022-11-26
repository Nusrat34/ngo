<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ngo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/Frontend/charity-doc/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/charity-doc/css/style.css')}}">
    @notifyCss
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
  @include('notify::components.notify')

@include('Frontend.partials.header')
@yield('content')



   @include('Frontend.partials.footer')
    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="{{url('/Frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('/Frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('/Frontend/js/popper.min.js')}}"></script>
    <script src="{{url('/Frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/Frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('/Frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('/Frontend/js/ajax-form.js')}}"></script>
    <script src="{{url('/Frontend/js/waypoints.min.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('/Frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('/Frontend/js/scrollIt.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('/Frontend/js/wow.min.js')}}"></script>
    <script src="{{url('/Frontend/js/nice-select.min.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('/Frontend/js/plugins.js')}}"></script>
    <script src="{{url('/Frontend/js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{url('/Frontend/js/contact.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.form.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('/Frontend/js/mail-script.js')}}"></script>

    <script src="{{url('/Frontend/js/main.js')}}"></script>
    @notifyJs
</body>

</html>