@extends('Frontend.master')
@section('content')
<div style="margin:50px">
<h1>student donation request</h1>
<form action="{{route('sdonation.list')}}"method="post">
    @csrf
         
        <div class="form-group">
            <label for="name"> Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="title">
        </div>
            

        <div class="form-group">
            <label for="name">Institute</label>
            <input name="institute" type="text" class="form-control" id="institute"placeholder="institute">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="address"placeholder="Address">
        </div>
        <div class="form-group">
            <label for="name">Amount</label>
            <input name="amount" type="number" class="form-control" id="amount"placeholder="amount">
        </div>
        <div class="form-group">
            <label for="name">Cause for donation</label>
            <input name="cause" type="text" class="form-control" id="cause"placeholder="cause">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>





@endsection