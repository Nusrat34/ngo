@extends('Frontend.master')
@section('content')
<div style="margin:50px">
<div style="padding: 35px;">
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
            @foreach($mem as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->member_name}}</td>
                <td>{{$data->email_name}}</td>
                <td>{{$data->phone_number}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->status}}</td>




            </tr>
            @endforeach

        </tbody>
    </table>
    {{$mem->links()}}
</div>
</div>

@endsection