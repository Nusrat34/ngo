@extends('backend.master')
@section('content')


    <form action="{{route('member.memberform.store')}}" method="post">
       @csrf  
        
         
        <div class="form-group">
            <label for="name"> Name</label>
            <input required name="member_name" type="text" class="form-control" id="name" placeholder="Member Name">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input required name="email_name"type="text" class="form-control" id="mail"placeholder="Email Name">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input required name="password" type="text" class="form-control" id="name" placeholder="Password">

            
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input name="phone_number" type="number" class="form-control" id="name"placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input required name="address" type="text" class="form-control" id="name"placeholder="Address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection()