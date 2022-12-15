@extends('backend.master')
@section('content')
<h1>contact list</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contact as $data )
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->subject}}</td>
        <td>{{$data->message}}</td>

        <td>
                
                <a href="{{route('contact.delete',$data->id)}}" class="btn btn-danger">Delete</a>
        
            </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection