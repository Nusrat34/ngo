@extends('backend.master')
@section('content')
<h1>Donation list</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">phone_number</th>
        <th scope="col">Address</th>
        <th scope="col">Amount</th>
        <th scope="col">cause</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($don as $data)
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->cause}}</td>
        <td>{{$data->status}}</td>


        <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>
    </tr>
    @endforeach


@endsection