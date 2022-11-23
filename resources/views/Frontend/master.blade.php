<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ngo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('/Frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('/Frontend/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    
    <!-- header-end -->
      @include('Frontend.partials.header')





    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the student
                                When They Need</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                            <a href="About.html" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- reson_area_start  -->
    @yield('content')
    <!-- reson_area_end  -->

    <!-- latest_activites_area_start  -->
    
    <!-- latest_activites_area_end  -->

    <!-- popular_causes_area_start  -->
    
    <!-- popular_causes_area_end  -->
     
    <!-- counter_area_start  -->
    
    <!-- counter_area_end  -->
      
    <!-- our_volunteer_area_start  -->
    
    <!-- our_volunteer_area_end  -->
    
    <!-- news__area_start  -->
    
    <!-- news__area_end  -->

    <div data-scroll-index='1' class="make_donation_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Make a Donation</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="#" class="donation_form">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="single_amount">
                                    <div class="input_field">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="40,200" aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single_amount">
                                   <div class="fixed_donat d-flex align-items-center justify-content-between">
                                       <div class="select_prise">
                                           <h4>Select Amount:</h4>
                                       </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_1" name="radio-group" checked>
                                            <label for="blns_1">10</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="blns_2" name="radio-group" checked>
                                            <label for="blns_2">30</label>
                                        </div>
                                        <div class="single_doonate"> 
                                            <input type="radio" id="Other" name="radio-group" checked>
                                            <label for="Other">Other</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="donate_now_btn text-center">
                        <a href="#" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- footer_start  -->
   
    <!-- footer_end  -->
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
    <script src="{{url('js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{url('/Frontend/js/contact.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.form.js')}}"></script>
    <script src="{{url('/Frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('/Frontend/js/mail-script.js')}}"></script>

    <script src="{{url('/Frontend/js/main.js')}}"></script>
</body>

</html>