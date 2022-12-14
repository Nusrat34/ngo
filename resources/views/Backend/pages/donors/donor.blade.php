@extends('backend.master')
@section('content')
<div class="btn btn-primary">donor list</div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone_number</th>
            <th scope="col">Address</th>
            <th scope="col">occupation</th>
            <th scope="col">Sender_phone_number</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dot as $key=> $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->occupation}}</td>
            <td>{{$data->account_number}}</td>
            <td>{{$data->amount}}</td>
            <td>{{$data->status}}</td>


            <td>
                @if($data->status != 'approved')
                <a href="{{route('donor.approve',$data->id)}}" class="btn btn-primary">approve</a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$dot->links()}}

@endsection