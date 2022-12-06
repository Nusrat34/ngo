@extends('backend.master')
@section('content')
<h1>student donation list</h1>

<table class="table">
    <thead class="thead-dark">
   
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Address</th>
        <th scope="col">Amount</th>
        <th scope="col">Institute</th>
        <th scope="col">Causes</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($stu as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
        <td>{{$data->title}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->institute}}</td>
        <td>{{$data->cause}}</td>
        <td>{{$data->amount}}</td>
        <td>{{$data->status}}</td>


        <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>
        

        
    </tr>
    @endforeach
    
    </tbody>
</table>

@endsection