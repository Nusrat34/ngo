@extends('backend.master')
@section('content')

<br>
<div class="container" id="printableArea">
    <div class="btn btn-secondary">student donation list</div>
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stu as $key=>$data)
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
                <td>
                    @if($data->status != 'approved')
                    <a href="{{route('approve.studentd',$data->id)}}" class="btn btn-primary">approve</a>
                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<input type="button" onclick="printDiv('printableArea')" value="print" class="btn btn-primary" />
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
{{$stu->links()}}

@endsection