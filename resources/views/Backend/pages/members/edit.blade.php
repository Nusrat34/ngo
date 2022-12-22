@extends('backend.master')
@section('content')

<form action="{{route('member.update',$mem->id)}}" method="post">
    @method('put')
    @if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif
    @csrf


    <div class="form-group">
        <label for="name"> Name</label>
        <input required value="{{$mem->member_name}}" name="member_name" type="text" class="form-control" id="name" placeholder="Member Name">
    </div>

    <div class="form-group">
        <label for="name">Email</label>
        <input required value="{{$mem->email_name}}" name="email_name" type="text" class="form-control" id="name" placeholder="Email Name">
    </div>

    <div class="form-group">
        <label for="name">Password</label>
        <input required value="{{$mem->password}}" name="password" type="text" class="form-control" id="name" placeholder="Password">


    </div>

    <div class="form-group">
        <label for="name">Phone Number</label>
        <input required value="{{$mem->phone_number}}"name="phone_number" type="number" class="form-control" id="name" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <label for="name">Address</label>
        <input required value="{{$mem->address}}" name="address" type="text" class="form-control" id="name" placeholder="Address">
    </div>

    <button type="submit" class="btn btn-primary">update</button>
</form>



@endsection