@extends('backend.master')
@section('content')
<a href="{{route('scholarship.create')}}" class="btn btn-success">Add new Scholarship</a>

<br /> <br />
<div class="container" id="printableArea">
    <div class="btn btn-primary">Scholarship list</div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $scholarships as $key=> $scholarship )
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$scholarship->name}}</td>
                <td>{{$scholarship->amount}}</td>
                <td>{{$scholarship->description}}</td>
                <td>
                <a href="{{route('scholarship.edit',$scholarship->id)}}" class="btn btn-primary">Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>

{{$scholarships->links()}}

@endsection