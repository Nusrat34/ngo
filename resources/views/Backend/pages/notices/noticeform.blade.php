@extends('backend.master')
@section('content')
<form action="{{route('notice.noticeform.store')}}" method="post"> 
    @csrf       
        
         
        <div class="form-group">
            <label for="name">Notice Name</label>
            <input name="Notice_name" type="text" class="form-control" id="name" placeholder="Notice Name">
        </div>

        <div class="form-group">
            <label for="name">Status</label>
            <input name="Status"type="text" class="form-control" id="name"placeholder="Status">
        </div>

        <div class="form-group">
            <label for="name">Published date</label>
            <input name="Published_date" type="text" class="form-control" id="name" placeholder="Published">

            
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <input name="Description" type="text" class="form-control" id="name"placeholder="Description">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




@endsection()