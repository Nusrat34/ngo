@extends('backend.master')
@section('content')



<form action="{{route('book.bookform.store')}}" method="post">    
        
         @csrf
        <div class="form-group">
            <label for="name">Book Name</label>
            <input name="Book_name" type="text" class="form-control" id="name" placeholder="Book Name">
        </div>

        <div class="form-group">
            <label for="name">Writter Name</label>
            <input name="Writter_name"type="text" class="form-control" id="name"placeholder="Writter Name">
        </div>

        <div class="form-group">
            <label for="name">Catagory</label>
            <input name="Catagory_name" type="text" class="form-control" id="name" placeholder="Catagory Name">

            
        </div>

        <div class="form-group">
            <label for="File">Upload file</label>
            <input name="File" type="file" class="form-control" id="file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection()