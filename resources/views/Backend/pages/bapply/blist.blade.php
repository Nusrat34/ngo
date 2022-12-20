@extends('backend.master')
@section('content')
<h1>apply book list</h1>
</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Book_name</th>
        <th scope="col">Writter_name</th>
        <th scope="col">category</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($applied_books as $key => $applied_book)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{ $applied_book->user->name }}</td>
            <td>{{ $applied_book->user->email }}</td>
            <td>{{ $applied_book->book->book_name }}</td>
            <td>{{ $applied_book->book->writter_name }}</td>
            <td>{{ $applied_book->book->category }}</td>
            <td>
                @if($applied_book->status == 0)
                    <a href="{{route('bookapply.approve',$applied_book->id)}}" class="btn btn-primary">Approve</a>
                @else
                    <button class="btn btn-success">Approved</button>
                @endif
                
            </td>
        </tr>
    @endforeach
    
    </tbody>
</table>
{{$applied_books->links()}}

@endsection