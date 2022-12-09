@extends('Frontend.master')
@section('content')
<h1>loan form</h1>

<form action="{{route('loan.store')}}" method="post">
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
            <label for="name">Phone_number</label>
            <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="phone_number">
        </div>
        <div class="form-group">
            <label for="name">Father_name</label>
            <input name="father_name" type="text" class="form-control" id="father_name" placeholder="father_name">
        </div>
        <div class="form-group">
            <label for="name">Mother_name</label>
            <input name="mother_name" type="text" class="form-control" id="mother_name" placeholder="mother_name">
        </div>
            
        <div class="form-group">
            <label for="name">Father_occupation</label>
            <input name="father_occupation" type="text" class="form-control" id="father_occupation" placeholder="father_occupation">
        </div>
            
        <div class="form-group">
            <label for="name">Family_member</label>
            <input name="family_member" type="text" class="form-control" id="family_member" placeholder="family_member">
        </div>
            

        <div class="form-group">
            <label for="name">Institute</label>
            <input name="institute" type="text" class="form-control" id="institute"placeholder="institute">
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input name="address" type="text" class="form-control" id="address"placeholder="Address">
        </div>
        <div class="form-group">
            <label for="name">Amount</label>
            <input name="amount" type="number" class="form-control" id="amount"placeholder="amount">
        </div>
        <div class="form-group">
            <label for="name">Cause for loan</label>
            <input name="cause" type="text" class="form-control" id="cause"placeholder="cause">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection