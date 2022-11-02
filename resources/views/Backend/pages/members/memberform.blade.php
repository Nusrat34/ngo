@extends('backend.master')
@section('content')


  <form>    
        
         
        <div class="form-group">
            <label for="name">Member Name</label>
            <input name="Member_name" type="text" class="form-control" id="name" placeholder="Member Name">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input name="Email_name"type="text" class="form-control" id="name"placeholder="Email Name">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input name="Password" type="text" class="form-control" id="name" placeholder="Password">

            
        </div>

        <div class="form-group">
            <label for="name">Phone Number</label>
            <input name="Phone_number" type="text" class="form-control" id="name"placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="Address" type="text" class="form-control" id="name"placeholder="Address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection()