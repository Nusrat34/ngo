@extends('backend.master')
@section('content')


    <form action="{{route('transaction.store')}}" method="POST">
       @csrf  
        
         
        <div class="form-group">
            <label for="name"> Transaction_id</label>
            <input name="trax_head" type="text" class="form-control" id="trax_head" placeholder="trax_head">
        </div>

        <div class="form-group">
            <label for="name">CashIn</label>
            <input name="in"type="text" class="form-control" id="in"placeholder="in">
        </div>

        <div class="form-group">
            <label for="name">Out</label>
            <input name="out" type="text" class="form-control" id="out" placeholder="out">

            
        </div>
        <div class="form-group">
            <label for="name">recievers_account_no</label>
            <input name="recivers_account_no" type="number" class="form-control" id="number" placeholder="recivers">

            
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection