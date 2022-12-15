@extends('Frontend.master')
@section('content')

<br/>
<br/>
<br/>
<br/>

<h1>book form</h1>

<form action="{{route('book.show')}}"method="post" enctype="maltipart/form-data">
    @csrf         
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name">
            
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="email">
            
        </div>
        <div class="form-group">
            <label for="name">Book Name</label>
            <input name="book_name" type="text" class="form-control" id="book_name" placeholder="Book name">
        </div>
        <div class="form-group">
            <label for="name">Writter_name</label>
            <input name="writter_name" type="text" class="form-control" id="writter_name" placeholder="writter_name">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
            </select>
        </div>
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
@endsection