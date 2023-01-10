@extends('backend.master')
@section('content')

<form action="{{route('scholarship.search')}}" method="get">

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
<div id="scholarship report">

    <h1>Scholarship report- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Scholarship_name</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Note</th>
            <th scope="col">percentage</th>
            <th scope="col">Amount</th>
            <th scope="col">Applied for amount after Scholarship</th>
            <!-- <th scope="col">Status</th> -->
            </tr>
        </thead>
        <tbody>
            @if(isset($scholarship_applications))
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
                <!-- <td>
                    @if($data->status == 1)
                    <span class="btn btn-sm btn-success">Approved</span>
                    @else
                    <span class="btn btn-sm btn-info">Pending</span>
                    @endif
                </td> -->
            </tr>
            @endforeach
             @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('scholarship report')" class="btn btn-success">Print</button>


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