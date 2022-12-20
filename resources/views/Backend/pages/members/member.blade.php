@extends('backend.master')
@section('content')

<h1>member list</h1>
<a href="{{route('member.memberform')}}" class="btn btn-success">
    create new member
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
        @foreach($mem as $key=> $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->member_name}}</td>
            <td>{{$data->email_name}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->address}}</td>

            <td>
                <a href="{{route('member.edit',$data->id)}}" class="btn btn-primary">Update</a>
                <a href="{{route('member.delete',$data->id)}}" class="btn btn-danger">Delete</a>

            </td>



        </tr>
        @endforeach

    </tbody>
</table>
{{$mem->links()}}
@endsection