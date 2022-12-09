@extends('Frontend.master')
@section('content')


<!-- slider_area_start -->
<div class="slider_area">    
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
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
                        <div class="help_content">
                            <h4>Blood Camp</h4>
                            <p>Lorem ipsum, or lipsum as it is 
                                sometimes known, is dummy 
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
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
                        <div class="help_content">
                            <h4>Friendly Volunteer</h4>
                            <p>Lorem ipsum, or lipsum as it is 
                                sometimes known, is dummy 
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reson_area_end  -->

    <!-- latest_activites_area_start  -->
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> apply for loan  </span><br>
                                </h3>
                                <a href="{{route('loan.form')}}" class="boxed-btn4">loan</a>
                                <div class="d-flex justify-content-center">
                        
                        </div>
                        </div>
                        <p class="para_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation.</p class="para_1">
                        <p class="para_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                            enim minim veniam, quis nostrud exercitation. tempor 
                            incididunt  ut labore dolore magna aliqua. enim minim 
                            veniam, quis nostrud exercitation.</p>
                            
                        <a href="{{route('student.list')}}" class="boxed-btn4">student donation request</a>
                        
                        
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
                        <h3><span>Scholarship area</span></h3>
                        <a href="{{route('s.apply')}}" class="boxed-btn4">applyscholarship</a>
                        
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
                        <h3><span>Apply for donation</span></h3>
                        <div class="d-flex justify-content-center">
                        <button class="btn btn-primary"type="submit"data-toggle="modal" data-target="#Donation">Donation</button>
                    </div>

                    </div>
                </div>
            </div>
            
<!-- Donation now -->

<!-- Modal -->

<div style="z-index:10000000" class="modal fade" id="Donation" tabindex="-1" role="dialog" aria-labelledby="donation" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('apply.donation')}}"method='post'>
        @csrf
       <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="name"> Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input name="email"type="text" class="form-control" id="name"placeholder="Email Name">
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input name="phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="Address">
        </div>
        <div class="form-group">
            <label for="name">Amount</label>
            <input name="amount" type="number" class="form-control" id="name"placeholder="Amount">
        </div>
        <div class="form-group">
            <label for="name">Cause for donation</label>
            <input name="cause" type="text" class="form-control" id="name"placeholder="Cause">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
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
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Sakil khan</h4>
                                <p>Donner</p>
                            </div>
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
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Emran Ahmed</h4>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="img/volenteer/3.png" alt="">
                        </div>
                        <div class="voolenteer_info d-flex align-items-end">
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info_inner">
                                <h4>Sabbir Ahmed</h4>
                                <p>Volunteer</p>
                            </div>
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
                        <h3><span>barishal</span></h3>
                    </div>
                </div>
            </div>
                
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary"type="submit"data-toggle="modal" data-target="#donatenow">Donate Now</button>
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
        


      <form  action="{{route('user.login')}}"method="post"enctype="multipart/form-data">
        @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
    <form action="{{route('user.store')}}" method='post'>
        @csrf
       <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">please Donate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
            <label for="name"> Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input name="email"type="text" class="form-control" id="name"placeholder="Email Name">
        </div>
        <div class="form-group">
            <label for="name">Password</label>
            <input name="password" type="text" class="form-control" id="name"placeholder="password">
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input name="phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>
        
        <div class="form-group">
            <label for="name">Occupation</label>
            <input name="occupation" type="text" class="form-control" id="occupation"placeholder="occupation">
        </div>
        
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="name"placeholder="Address">
        </div>
        <div class="form-group">
            <label for="name">Amount</label>
            <input name="amount" type="number" class="form-control" id="name"placeholder="amount">
        </div>
        <div class="form-group">
            <label for="name">Transaction_ID</label>
            <input name="transaction" type="number" class="form-control" id="transaction"placeholder="transaction">
        </div>
        
        <div class="form-group">
            <label for="name">From__account</label>
            <input name="from_account" type="number" class="form-control" id="from_account"placeholder="from_account">
        </div>
        
        <div class="form-group">
            <label for="">To_account</label>
            <select name="to_account" id="to_account" class="form-control">
                <option value="bkash">bkash</option>
                <option value="rocket">rocket</option>
                <option value="m_cash">m_cash</option>
                <option value="sure_cash">sure_cash</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
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
      <form  action="{{('registration')}}"method="post"enctype="multipart/form-data">
        @csrf
     <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="student_name"type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="student_email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
    <input name="student_password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">signup</button>
</form>
      </div>
    </div>
  </div>
</div>
    @endsection