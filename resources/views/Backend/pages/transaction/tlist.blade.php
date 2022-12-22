@extends('backend.master')
@section('content')

<div class="btn btn-success">transaction list</div>

<!-- <a href="{{route('transaction.show')}}" class="btn btn-success">
    create new transaction -->
</a>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Transaction_id</th>
            <th scope="col">CashIn</th>
            <th scope="col">CashOut</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tran as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->trax_head}}</td>
            <td>{{$data->in}}</td>
            <td>{{$data->out}}</td>



        </tr>
        @endforeach

    </tbody>
</table>
{{$tran->links()}}
@endsection