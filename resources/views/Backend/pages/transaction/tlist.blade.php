@extends('backend.master')
@section('content')

 
<h1>transaction list</h1>
<form action="{{route('transation.reportsearch')}}" method="get">

<div class="row">
        <div class="col-md-4">
            <label for="">From date:</label>
            <input name="from_date" type="date" class="form-control">

        </div>
        <div class="col-md-4">
            <label for="">To date:</label>
            <input name="to_date" type="date" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>

</form>
<div id="transaction report">

<table class="table">
<h1>Scholarship report- {{date('Y-m-d')}}</h1>
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
            <th scope="col">Transaction Id</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
    @if(isset($dot))
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
            <td>{{$data->transaction_id}}</td>
            <td>
               {{ $data->created_at }} 
            </td>
        </tr>
        @endforeach
        @endif

    </tbody>
</table>

<button onclick="printDiv('transaction report')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection