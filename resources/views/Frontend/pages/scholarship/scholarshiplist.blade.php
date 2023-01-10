@extends('Frontend.master')
@section('content')

<div style="margin:70px 50px 0px  50px ;">

<div class="container">
    <h1> applied scholarship list</h1>
<br>
<br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Scholarship_name</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Note</th>
                <th scope="col">percentage</th>
                <th scope="col">Amount</th>
                <th scope="col">Applied for amount after Scholarship</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $scholarship_applications as $key=> $data )
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->scholarship->name}}</td>
                <td>{{$data->user->name}}</td>
                <td>{{$data->user->email}}</td>
                <td>{{$data->note}}</td>
                <td>{{$data->percentage}}%</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->applied_amount}}</td>
                <td>
                    @if($data->status == 1)
                        <span class="btn btn-sm btn-success">Approved</span>
                    @else
                        <span class="btn btn-sm btn-info">Pending</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
</div>
<br>
<br>
<!-- {{$scholarship_applications->links()}} -->
@endsection