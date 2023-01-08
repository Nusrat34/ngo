@extends('backend.master')
@section('content')

<div class="container" id="printableArea">
    <div class="btn btn-primary">Applied scholarship list</div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Scholarship_name</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Note</th>
                <th scope="col">Pecentage Applied</th>
                <th scope="col">amount</th>
                <th scope="col">Applied for amount after Scholarship</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
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
                <td>
                    @if($data->status == 0)
                        <a href="{{route('scholarship.update',$data->id)}}" class="btn btn-primary">approve</a>
                    @endif

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>


    <input type="button" onclick="printDiv('printableArea')" value="print"  class="btn btn-primary"/>
<script>
            function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
                console.log('on printAbleArea');
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

</script>

<br>
<br>

{{$scholarship_applications->links()}}
@endsection