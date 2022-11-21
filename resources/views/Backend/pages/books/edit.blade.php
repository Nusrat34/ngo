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
            <input value="{{$book->book_name}}" required name="Book_name" type="text" class="form-control" id="name" placeholder="Book Name">
            
        </div>

        <div class="form-group">
            <label for="name">Writter Name</label>
            <input value="{{$book->writter_name}}" name="Writter_name"type="text" class="form-control" id="name"placeholder="Writter Name">
        </div>

        <div class="form-group">
            <label for="name">Catagory</label>
            <input value="{{$book->catagory}}" name="Catagory_name" type="text" class="form-control" id="name" placeholder="Catagory Name">

            
        </div>

        <div class="form-group">
            <label for="image">Upload image</label>
            <input  type="file" class="form-control"  name="image" id="file">
        </div>

        <button type="submit" class="btn btn-primary">update</button>
    </form>


@endsection()