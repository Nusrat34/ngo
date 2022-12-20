@extends('Frontend.master')
@section('content')


<!-- slider_area_start -->
<div class="slider_area">
    <style>
        .slider_area {
            background-image: url(Frontend/user.jpg);
            background-size: 1000px 1000px;
        }
    </style>
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
                        @auth
                        @if(auth()->user()->role =='student')
                        <a href="{{route('apply.booklist')}}" class="btn btn-primary">applied book list</a>
                        <br>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- reson_area_start  -->

<div class="reson_area section_padding">

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section_title text-center mb-55">

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="single_reson">
                <div class="thum">
                    <div class="thum_1">
                        <img src="img/help/1.png'" alt="">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_reson">
                <div class="thum">
                    <div class="thum_1">
                        <img src="img/help/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_reson">
                <div class="thum">
                    <div class="thum_1">
                        <img src="img/help/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- reson_area_end  -->

<!-- latest_activites_area_start  -->
<div class="latest_activites_area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="activites_info">
                    <div class="section_title">
                        <div class="d-flex justify-content-center">

                        </div>
                    </div>
                    @auth
                    @if(auth()->user()->role =='student')
                    <a href="{{route('student.list')}}" class="btn btn-primary">student donation request</a>
                    @endif
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest_activites_area_end  -->



<!-- popular_causes_area_start  -->
<div class="popular_causes_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    @auth
                    @if(auth()->user()->role =='student')
                    <h3><span>Scholarship area</span></h3>
                    <a href="{{route('s.apply')}}" class="btn btn-primary">applyscholarship</a>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- popular_causes_area_end  -->

<!-- counter_area_start  -->

<!-- counter_area_end  -->

<!-- our_volunteer_area_start  -->
<div class="our_volunteer_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    @auth
                    @if(auth()->user()->role =='student')
                    <h3><span>Apply for book</span></h3>
                    <li><a href="{{route('books')}}" class="btn btn-primary">applybook</a></li>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single_volenteer">
                                <div class="volenteer_thumb">
                                    <img src="img/volenteer/1.png" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_volenteer">
                                <div class="volenteer_thumb">
                                    <img src="img/volenteer/2.png" alt="">
                                </div>
                                <div class="voolenteer_info d-flex align-items-end">
                                    <div class="social_links">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_volenteer">
                                <div class="volenteer_thumb">
                                    <img src="img/volenteer/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- our_volunteer_area_end  -->

            <!-- news__area_start  -->

            <!-- news__area_end  -->

            <div data-scroll-index='1' class="make_donation_area section_padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section_title text-center mb-55">
                                @auth
                                @if(auth()->user()->role =='donor')
                                <h3><span>Make a donation</span></h3>
                                <div class="d-flex justify-content-center">

                                    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#donatenow">Donate Now</button>
                                </div>
                                 @endif
                                 @endauth
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        {{-- Modallogin --}}
        <div style="z-index: 10000000" class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login">login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route('user.login')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary">signup</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donate now -->

        <!-- Modal -->

        <div style="z-index:10000000" class="modal fade" id="donatenow" tabindex="-1" role="dialog" aria-labelledby="donate" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('ssl.payment')}}" method='post'>
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">please Donate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @auth
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name"> Name</label>
                                <input required name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{auth()->user()->name}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input required name="email" type="text" class="form-control" id="name" placeholder="Email Name" value="{{auth()->user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone Number</label>
                                <input required name="phone_number" type="number" class="form-control" id="name" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                                <label for="name">Occupation</label>
                                <input required name="occupation" type="text" class="form-control" id="occupation" placeholder="occupation">
                            </div>

                            <div class="form-group">
                                <label for="name">Address</label>
                                <input required name="address" type="text" class="form-control" id="name" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="name">Account_number</label>
                                <input required name="account_number" type="number" class="form-control" id="name" placeholder="account_number">
                            </div>
                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input required name="amount" type="number" class="form-control" id="name" placeholder="amount">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        @endauth
                </form>
            </div>
        </div>
    </div>


    {{-- Modal registration --}}
    <div style="z-index: 10000000" class="modal fade" id="Registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Registration">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{('registration')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input required name="student_name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
                            <small id="emailHelp" class="form-text text-muted"> </small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required name="student_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role" id="Role" class="form-control">
                                <option value="donor">donor</option>
                                <option value="student">student</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="student_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection