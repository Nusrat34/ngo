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
                        <h3 style="color:white"> Help the student
                            When They Need</h3>
                        <p style="color:white;">With so much to consume and such little time, coming up <br>
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
<div class="latest_activites_area ">
    <div class="container">
        <div class="row justify-content-center">

            <div class="activites_info" style="width: 800px;">
                <div class="section_title">
                    <div class="d-flex justify-content-center">
                        <img src="https://media.istockphoto.com/id/1337880968/photo/volunteers-giving-out-free-packed-of-food-during-the-charity-drive-community-food-bank.jpg?b=1&s=170667a&w=0&k=20&c=lE0jdIjlbkRAx8frVy9R-8nKLgToafgC2t4Xj1wZvA0=" alt="">

                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    @auth
                    @if(auth()->user()->role =='student')
                    <a href="{{route('student.list')}}" class="btn btn-primary">student donation request</a>
                    @endif
                    @endauth

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
                    <img src="https://media.istockphoto.com/id/1406889700/photo/portrait-of-diverse-group-of-students-in-graduation-gowns-and-caps-with-their-arms-around.jpg?b=1&s=170667a&w=0&k=20&c=RTT7DZh9q3Gkf0IuTBuhTPG2uhLrHN42e50jShsGXuA=" alt="">
                    <div class="section_title text-center mb-55">
                        @auth
                        @if(auth()->user()->role =='student')
                        <h3 style="color: black;">Scholarship area</h3>
                        <li><a href="{{route('scholarship.show')}}" class="btn btn-primary">Apply for scholarship</a>
                        </li>
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
                    <img src="https://media.istockphoto.com/id/1085770318/photo/wooden-brown-books-shelves-with-a-lamp.jpg?b=1&s=170667a&w=0&k=20&c=DM5YYUqLMtuAYkyB7roMC90FSPIhHvELA6YeakG2uLk=" alt="">
                    @auth
                    @if(auth()->user()->role =='student')
                    <h3 style="color:black ;">Apply for book</h3>
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
                                <img src="https://media.istockphoto.com/id/1271755758/photo/the-word-donate-on-wooden-blocks-with-heart-icon-against-blue-background-charity-and-donation.jpg?b=1&s=170667a&w=0&k=20&c=am3T8bxvpvuWWaOeh362tZce-MGstZoCgvRzrHt235k=" alt="">
                                @auth
                                @if(auth()->user()->role =='donor')
                                <h3>Make a donation</h3>
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

                            <button type="submit" class="btn btn-primary">SIGNIN</button>
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
                                <input required name="email" type="text" class="form-control" id="email" placeholder="Email Name" value="{{auth()->user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone Number</label>
                                <input required name="phone_number" type="number" class="form-control" id="number" placeholder="Phone Number">
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
                                <label for="name">Sender_phone_number</label>
                                <input required name="account_number" type="number" class="form-control" id="number" placeholder="account_number">
                            </div>
                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input required name="amount" type="number" class="form-control" id="number" placeholder="amount">
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
                            <label for="">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">HSC Result</label>
                            <input  name="hscresult" type="number" min="1" max="5" step="any" class="form-control" id="exampleInputEmail1" placeholder="result">
                            <small id="emailHelp" class="form-text text-muted"> </small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">SSC Result</label>
                            <input  name="sscresult" type="number" min="1" max="5" step="any"class="form-control" id="exampleInputEmail1" placeholder="result">
                            <small id="emailHelp" class="form-text text-muted"> </small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">CGPA </label>
                            <input name="cgpa" type="number" min="1" max="5" step="any" class="form-control" id="exampleInputEmail1" placeholder="result">
                            <small id="emailHelp" class="form-text text-muted"> </small>
                        </div>

                        <div class="form-group">
                            <label for="file">Uplode Document</label>
                            <input  type="file" class="form-control" name="file" id="file">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input required name="student_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">SIGNIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection