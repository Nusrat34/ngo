<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-lg-8">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-phone"></i>01918262021</a></li>
                                <li><a href="#"> <i class="fa fa-envelope"></i>ngo@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area" style="background:black; height:100px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="Frontend/ngo logo.jpg" alt="">

                            </a>
                            <style>
                                .logo{
                                    height:100px;
                                    width:50px;
                                }
                                </style>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('home.page')}}">home</a></li>
                                    @auth

                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#login">{{auth()->user()->name}}</a>


                                    </li>
                                    <li><a href="{{route('user.logout')}}">logout</a></li>
                                    @else
                                    <li><a href="About.html" data-toggle="modal" data-target="#Registration">Registration</a></li>
                                    <li><a href="About.html" data-toggle="modal" data-target="#login">login</a>
                                        @endauth
                                    

                                    @auth
                                    @if(auth()->user()->role == 'donor')
                                    <li><a href="{{route('donation.list')}}">donationlist</a>
                                    @endif
                                    @endauth

                                    </li>
                                    <li><a href="{{route('notice.list')}}"style=color:white>noticelist</a>

                                    </li>
                                    @auth
                                    @if(auth()->user()->role =='student')
                                    <li><a href="{{route('scholarship.show')}}"style=color:>scholarshiplist</a>
                                    </li>
                                    <li><a href="{{route('s.donation')}}">studentdonationlist</a>
                                    @endif
                                    @endauth
                                    </li>

                                    <li><a href="{{route('contact.us')}}" style="color:white">Contact</a></li>
                                    <li><a href="{{route('profile.us')}}">profile</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <!-- <div class="btn btn-primary">
                                    <a data-scroll-nav='1' href="#">Donar</a> 
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->