@extends('Frontend.master')
@section('content')
<div style="margin: 70px;">
<div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" src="{{url('/Frontend/profile.png')}}"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span>Role: {{auth()->user()->role}} </span></div>
                
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="text-right">Profile</h1>
                    </div>
                    <form action="{{route('profile.update')}}" method="post">

                        @method('put')
                        @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input required name="name" type="text" class="form-control" placeholder="Name" value="{{auth()->user()->name}}"></div>

                    </div>
                    <div class="row mt-3">
                        
                        <div class="col-md-12"><label class="labels">Email</label><input required type="text"name="email" class="form-control" placeholder="enter your email " value="{{auth()->user()->email}}"></div>
                       </div>
                    <div class="row mt-3">


                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Update Profile</button>
                    </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

</divstyle:>
@endsection