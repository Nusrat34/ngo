@extends('backend.master')
@section('content')

<form action="{{route('book.bookform.store')}}" method="post" enctype="multipart/form-data"> 
     @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

        
         @csrf
        <div class="form-group">
            <label for="name">Book Name</label>
            <input required name="book_name" type="text" class="form-control" id="book_name" placeholder="Book Name">
            
        </div>

        <div class="form-group">
            <label for="name">Writter Name</label>
            <input name="writter_name"type="text" class="form-control" id="writter_name"placeholder="Writter Name">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="Math">Math</option>
            </select>
        </div>
            
        </div>

        <div class="form-group">
            <label for="file">Upload file</label>
            <input  type="file" class="form-control"  name="file" id="file">
        </div>

        <button type="submit" class="btn btn-primary">add</button>
    </form>



@endsection()