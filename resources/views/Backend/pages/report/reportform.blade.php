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
<div id="bookReport">

<h1>books Report- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Book_name</th>
        <th scope="col">Writter_name</th>
        <th scope="col">category</th>
    
    </tr>
        </thead>
        <tbody>
        @if(isset($applied_books))
        @foreach($applied_books as $key => $applied_book)
          <tr>
           <td>{{$key+1}}</td>
          <td>{{ $applied_book->user->name }}</td>
            <td>{{ $applied_book->user->email }}</td>
            <td>{{ $applied_book->book->book_name }}</td>
            <td>{{ $applied_book->book->writter_name }}</td>
            <td>{{ $applied_book->book->category }}</td>
        
    </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('bookReport')" class="btn btn-success">Print</button>


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