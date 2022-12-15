@extends('backend.master')
@section('content')

<form action="{{route('tran.report.search')}}" method="get">

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
<div id="tranReport">

<h1>transaction Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">trax_head</th>
        <th scope="col">In</th>
        <th scope="col">Out</th>
        
    </tr>
        </thead>
        <tbody>
        @if(isset($tran))
        @foreach($tran as $key=>$data)
        <tr>
        <td>{{$key+1}}</td>
        <td>{{$data->trax_head}}</td>
        <td>{{$data->in}}</td>
        <td>{{$data->out}}</td>
        
    

 
        

        
    </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('tranReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection