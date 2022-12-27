@extends('backend.master')
@section('content')

<form action="{{route('scholarship.showw',$scholarship->id)}}" method="post" enctype="multipart/form-data"> 
@method('put')
    @csrf
<div class="form-group">
        <label for="name">Name</label>
        <input required value= "{{$scholarship->name}}"name="name" type="text" class="form-control" id="name" placeholder="Name">
        
    </div>

    <div class="form-group">
        <label for="name">Amount</label>
        <input required value="{{$scholarship->amount}}" name="amount" type="number" class="form-control" id="amount" placeholder="Amount">
    </div>

    <button type="submit" class="btn btn-primary">update</button>
</form>


@endsection