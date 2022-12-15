@extends('Frontend.master')
@section('content')
<h1>Donationlist</h1>
<div style="margin:70px 50px 0px  50px ;">

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">phone_number</th>
        <th scope="col">Address</th>
        <th scope="col">occupation</th>
        <th scope="col">Amount</th>
        <th scope="col">From__account</th>
        <th scope="col">To_account</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dot as $data)
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->occupation}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->from_account}}</td>
        <td>{{$data->to_account}}</td>
        <td>{{$data->status}}</td>


    </tr>
    @endforeach
    
    </tbody>
</table>
{{$dot->links()}}

@endsection()