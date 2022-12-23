@extends('Frontend.master')
@section('content')
<div style="margin:70px 50px 0px  50px ;">
    <h1 style="padding: 10px;">Applied book list</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Writter Name</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Download</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($applied_books as $key=> $applied_book)

            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $applied_book->book->book_name }}</td>
                <td>{{ $applied_book->book->writter_name }}</td>
                <td>{{ $applied_book->book->category }}</td>
                <td>
                    @if($applied_book->status == 1)
                        <span class="btn btn-sm btn-success">Approved</span>
                    @else
                        <span class="btn btn-sm btn-danger">Pending</span>
                    @endif
                </td>
                <td><a href="{{route('apply.booklist.bookDownloadFromServer',$applied_book->id)}}" class="btn btn-primary">Download Book</a></td>



            </tr>
            @endforeach

        </tbody>
    </table>



    @endsection