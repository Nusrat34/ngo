@extends('backend.master')
@section('content')
<form action="{{route('scholarship.str',$scholarship->id)}}" method="post" enctype="multipart/form-data">
@method('put')
@csrf

<div class="form-group">
            <label for="name">Percentage</label>
            <input required  name="percentage" type="number" class="form-control" id="Percentage" placeholder="Percentage">
        </div>

        <button type="submit" class="btn btn-primary">Add Percentage</button>
</from>
@endsection