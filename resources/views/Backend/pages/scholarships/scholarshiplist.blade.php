@extends('backend.master')
@section('content')
<h1>Apply scholarship list</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">phone_number</th>
        <th scope="col">Address</th>
        <th scope="col">Institute</th>
        <th scope="col">Amount</th>
        <th scope="col">cause</th>
        <th scope="col">From_date</th>
        <th scope="col">To_date</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $scholar as $data )
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->title}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone_number}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->institute}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->cause}}</td>
        <td>{{$data->from_date}}</td>
        <td>{{$data->to_date}}</td>
        <td>{{$data->status}}</td>



        <td>
                @if($data->status != 'approved')
                <a href="{{route('scholarship.update',$data->id)}}" class="btn btn-primary">approve</a>
                @endif
                
            </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection