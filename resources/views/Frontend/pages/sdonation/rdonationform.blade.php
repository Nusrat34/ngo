@extends('Frontend.master')
@section('content')
<div style="margin:50px">
    <div style="padding: 35px;">
        <h1>student donation request</h1>
        <form action="{{route('sdonation.list')}}" method="post">

            @if($errors->any())
            @foreach($errors->all() as $message)
            <p class="alert alert-danger">{{$message}}</p>
            @endforeach
            @endif

            @csrf

            <div class="form-group">
                <label for="name"> Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{auth()->user()->name}}">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="email" value="{{auth()->user()->email}}">
            </div>
            <div class="form-group">
                <label for="name">Phone number</label>
                <input name="phone_number" type="number" class="form-control" id="phone_number" placeholder="phone_number">
            </div>

            <div class="form-group">
                <label for="name">Institute</label>
                <input required name="institute" type="text" class="form-control" id="institute" placeholder="institute">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input required name="address" type="text" class="form-control" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="name">Amount</label>
                <input required name="amount" type="number" class="form-control" id="amount" placeholder="amount">
            </div>
            <div class="form-group">
                <label for="name">Account_number</label>
                <input required name="account_number" type="number" class="form-control" id="account_number" placeholder="account_number">
            </div>
            <div class="form-group">
                <label for="name">Cause for donation</label>
                <input required name="cause" type="text" class="form-control" id="cause" placeholder="cause">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





@endsection