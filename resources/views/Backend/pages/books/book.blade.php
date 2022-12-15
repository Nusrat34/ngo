@extends('backend.master')
@section('content')


<h1> book list</h1>
@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

<a href="{{route('book.bookform')}}" class="btn btn-success">

    add new book
</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Book_name</th>
            <th scope="col">Writter_name</th>
            <th scope="col">Category</th>
            <th scope="col">File</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($boi as $data)

        <tr>
            <th scope="row">{{$data->id}}
            <td>{{$data->book_name}}</td>
            <td>{{$data->writter_name}}</td>
            <td>{{$data->category}}</td>
            <td><img width="50px" src="{{url('/uploads/',$data->file)}}" alt=""></td>
            <td>
                <a href="{{route('admin.book.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.book.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.book.view',$data->id)}}" class="btn btn-success">View</a>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

{{$boi->links()}}






@endsection