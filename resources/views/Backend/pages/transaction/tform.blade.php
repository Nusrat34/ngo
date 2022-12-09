@extends('backend.master')
@section('content')


    <form action="{{route('transaction.store')}}" method="POST">
       @csrf  
        
         
        <div class="form-group">
            <label for="name"> Trax_head</label>
            <input name="trax_head" type="text" class="form-control" id="trax_head" placeholder="trax_head">
        </div>

        <div class="form-group">
            <label for="name">In</label>
            <input name="in"type="text" class="form-control" id="in"placeholder="in">
        </div>

        <div class="form-group">
            <label for="name">Out</label>
            <input name="out" type="text" class="form-control" id="out" placeholder="out">

            
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection()