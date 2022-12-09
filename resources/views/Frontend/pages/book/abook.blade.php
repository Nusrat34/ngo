@extends('Frontend.master')
@section('content')
<h1>book form</h1>

<form >
        
         
        <div class="form-group">
            <label for="name">Book Name</label>
            <input required name="Book_name" type="text" class="form-control" id="name" placeholder="Book Name">
            
        </div>

        <div class="form-group">
            <label for="name">Writter Name</label>
            <input name="Writter_name"type="text" class="form-control" id="name"placeholder="Writter Name">
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