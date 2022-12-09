@extends('Frontend.master')
@section('content')
<div style="margin:70px ;">
<h1>Notice list</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Notice_name</th>
        <th scope="col">Status</th>
        <th scope="col">published_Date</th>
        
        


    </tr>
    </thead>
    <tbody>
    @foreach($not as $data)
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->notice_name}}</td>
        <td>{{$data->status}}</td>
        <td>{{$data->published_date}}</td>
        <td>{{$data->Description}}</td>

        <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-success">View</a>
            </td>
        

        
    </tr>
    @endforeach
    
    </tbody>
</table>
</div>



@endsection