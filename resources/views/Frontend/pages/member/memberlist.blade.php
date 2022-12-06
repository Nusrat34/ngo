@extends('Frontend.master')
@section('content')
<div style="margin:50px 50px 0px  50px ;">
<table class="table">
    <thead class="thead-dark">
   
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone_number</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($mem as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
        <td>{{$data->member_name}}</td>
        <td>{{$data->email_name}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->status}}</td>

        

        
    </tr>
    @endforeach
    
    </tbody>
</table>
</div>

@endsection