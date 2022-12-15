@extends('backend.master')
@section('content')

<h1>show Book</h1>


<form action="{{route('admin.book.update',$book->id)}}" method="post" enctype="multipart/form-data">
    @method ('put')
    @if($errors->any())
    @foreach($errors->all() as $message)
    <p class="alert alert-danger">{{$message}}</p>
    @endforeach
    @endif


    @csrf
    <div class="form-group">
        <label for="name">Book Name</label>
        <input value="{{$book->book_name}}" required name="book_name" type="text" class="form-control" id="name" placeholder="Book Name">

    </div>

    <div class="form-group">
        <label for="name">Writter Name</label>
        <input value="{{$book->writter_name}}" name="writter_name" type="text" class="form-control" id="name" placeholder="Writter Name">
    </div>

    <div class="form-group">
        <label for="name">Category</label>
        <input value="{{$book->category}}" name="category_name" type="text" class="form-control" id="name" placeholder="Catagory Name">


    </div>

    <div class="form-group">
        <label for="file">Upload file</label>
        <input type="file" class="form-control" name="file" id="file">
    </div>

    <button type="submit" class="btn btn-primary">update</button>
</form>


@endsection()