@extends('Frontend.master')
@section('content')
<div style="margin:50px">
<div style="padding: 35px;">

    <table class="table">
        <thead class="thead-dark">

            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone_number</th>
                <th scope="col">Address</th>
                <th scope="col">Institute</th>
                <th scope="col">Amount</th>
                <th scope="col">Account_number</th>
                <th scope="col">Causes</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stu as $key=> $data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone_number}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->institute}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->account_number}}</td>
                <td>{{$data->cause}}</td>
                <td>{{$data->status}}</td>


            </tr>
            @endforeach

        </tbody>
    </table>
    {{$stu->links()}}
</div>
</div>


@endsection