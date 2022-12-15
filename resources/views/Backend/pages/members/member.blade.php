@extends('backend.master')
@section('content')

<h1>member list</h1>
<a href="{{route('member.memberform')}}" class="btn btn-success">
create new user
</a>
  <table class="table">
    <thead class="thead-dark">
   
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone_number</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
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

        <td>
                <a href="" class="btn btn-primary">Update</a>
                <a href="" class="btn btn-danger">Delete</a>
                
            </td>
        

        
    </tr>
    @endforeach
    
    </tbody>
</table>
{{$mem->links()}}
@endsection