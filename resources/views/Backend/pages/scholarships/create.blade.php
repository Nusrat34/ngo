@extends('backend.master')
@section('content')

<form action="{{route('scholarship.store')}}" method="post" enctype="multipart/form-data"> 
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input required name="name" type="text" class="form-control" id="name" placeholder="Name">
        
    </div>

    <div class="form-group">
        <label for="name">Amount</label>
        <input required name="amount" type="number" class="form-control" id="amount" placeholder="Amount">
    </div>
    <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control"required name="description" id="description"></textarea>
        </div>

    <button type="submit" class="btn btn-primary">add</button>
</form>



@endsection()